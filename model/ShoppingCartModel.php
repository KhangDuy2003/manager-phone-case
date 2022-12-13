<?php
class ShoppingCartModel {
    private $table = "shoppingcart";
    private $connection;

    
    public function __construct($connection) {
		$this->connection = $connection;
    }

    
    public function getAll(){
      try{
        $Username = $_COOKIE['USERNAME'];
        $consulta1 = $this->connection->prepare("SELECT id FROM registration where username = '$Username'");
        $consulta1->execute();
        $result1 = $consulta1 -> fetchAll();
        $userid =  $result1[0]["id"];

        $consulta2 = $this->connection->prepare("SELECT phonecaseid, amount, id FROM shoppingcart where userid = $userid");
        $consulta2->execute();
        $resultados2 = $consulta2 ->fetchAll();
        $listShoppingCarts=array();

        foreach($resultados2 as $phonecase) {
            array_push($listShoppingCarts, $phonecase);
        }

        $listProducts=array();
        $sum = 0;
        for($i = 0; $i < count($listShoppingCarts); $i++) {
          $index = $listShoppingCarts[$i]["phonecaseid"];
          $consulta3 = $this->connection->prepare("SELECT name,price,value,description, image,id FROM phonecase where id = $index");
          $consulta3->execute();
          $resultados3 = $consulta3 ->fetchAll();
          $cost =  $resultados3[0]["price"] * $listShoppingCarts[$i]["amount"];
          $indexResutl3 = count($resultados3[0]);
          $resultados3[0]["cost"] = $cost;
          $resultados3[0]["cartId"] = $listShoppingCarts[$i]["id"];
          $resultados3[0]["quantity"] = $listShoppingCarts[$i]["amount"];
          array_push($listProducts,$resultados3[0]);
          $sum = $sum + $cost;
      }

      $_SESSION['PRICE'] =  $sum;
      return $listProducts;
      }
    catch (Exception $e) {
        echo '<script>alert("Có lỗi,' . $e -> getMessage() . '")</script>';
        require_once __DIR__ . "/../view/home.php";
    }
     
    }
    public function deleteCart($id){
      try{
        $quantity = $_GET["q"];
        $phonecaseid = $_GET["ps"];
        $consulta2 = $this->connection->prepare("SELECT value FROM phonecase where id = $phonecaseid");
        $consulta2->execute();
        $resultados2 = $consulta2 ->fetchAll();
        if(count($resultados2) > 0){
          $valueOfPhoneCase = $resultados2[0]["value"]; 
          $listShoppingCarts=array();

          $sql = "DELETE FROM shoppingcart WHERE id=$id";
          $consulta = $this->connection->prepare($sql);
          $consulta->execute();

          if($consulta == True){
              $changeQuantity = $valueOfPhoneCase + $quantity;
              $sql1 = "UPDATE phonecase SET value=$changeQuantity WHERE id=$phonecaseid";
              $consulta1= $this->connection->prepare($sql1);
              $consulta1->execute();
              if($consulta1 == True){
                echo '<script>alert("Delete thành công")</script>';
                require_once __DIR__ . "/../view/shoppingCart.php"; 
              }else{
                echo '<script>alert("Delete thất bại, vui lòng kiểm tra lại")</script>';
                require_once __DIR__ . "/../view/shoppingCart.php";
              }
          }
          else{
              echo '<script>alert("Delete thất bại, vui lòng kiểm tra lại")</script>';
              require_once __DIR__ . "/../view/shoppingCart.php";
          }

        }
        else{
          echo '<script>alert("Delete thất bại, vui lòng kiểm tra lại")</script>';
          require_once __DIR__ . "/../view/shoppingCart.php";
      }
      }
      catch (Exception $e) {
          echo '<script>alert("Có lỗi,' . $e -> getMessage() . '")</script>';
          require_once __DIR__ . "/../view/shoppingCart.php";
      }
      
  }
    public function insert(){
        $phonecaseid = $_POST["phonecaseid"];
        $amount = $_POST["amount"];
        $userName = $_COOKIE['USERNAME'];
        $originQuantity = $_POST["originQuatity"];
        try{
            $consulta1 = $this->connection->prepare("SELECT id FROM registration where username = '$userName'");
            $consulta1->execute();
            $result1 = $consulta1 -> fetchAll();
            $userid =  $result1[0]["id"];
            $restQuantity = $originQuantity - $amount;
            $sql1 = "UPDATE phonecase SET value=$restQuantity WHERE id=$phonecaseid";
            $consulta1= $this->connection->prepare($sql1);
            $consulta1->execute();
           
            if($consulta1 == true){
              $consulta = $this->connection->prepare("INSERT INTO shoppingcart (phonecaseid, amount, userid)
              VALUES (:phonecaseid,:amount,:userid)");
              $consulta->execute(array(
              "phonecaseid" => $phonecaseid,
              "amount" => $amount,
              "userid" => $userid
              ));
              $this->connection = null;
              require_once __DIR__ . "/../view/shoppingCart.php";
            }
           else{
              echo '<script>alert("Có lỗi")</script>';
              require_once __DIR__ . "/../view/home.php";
           }
          }
        catch (Exception $e) {
            echo '<script>alert("Có lỗi,' . $e -> getMessage() . '")</script>';
            require_once __DIR__ . "/../view/home.php";
        }
      }
}
?>