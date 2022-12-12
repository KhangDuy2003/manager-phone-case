<?php
class ShoppingCartModel {
    private $table = "shoppingcart";
    private $connection;

    
    public function __construct($connection) {
		$this->connection = $connection;
    }

    
    public function getAll(){

        $Username = $_COOKIE['USERNAME'];
        $consulta1 = $this->connection->prepare("SELECT id FROM registration where username = '$Username'");
        $consulta1->execute();
        $result1 = $consulta1 -> fetchAll();
        $userid =  $result1[0]["id"];

        $consulta2 = $this->connection->prepare("SELECT phonecaseid, amount, total FROM shoppingcart where userid = $userid");
        $consulta2->execute();
        $resultados2 = $consulta2 ->fetchAll();
        $listShoppingCarts=array();

        foreach($resultados2 as $phonecase) {
            array_push($listShoppingCarts, $phonecase);
        }

        $listProducts=array();

        $sum = 0;
        for($i = 0; $i < count($listShoppingCarts); $i++) {
          $index = $listShoppingCarts[$i][0];
          $consulta3 = $this->connection->prepare("SELECT name,price,value,description, image FROM phonecase where id = $index");
          $consulta3->execute();
          $resultados3 = $consulta3 ->fetchAll();
          $cost =  $resultados3[0]["price"] * $listShoppingCarts[$i][1];
          $indexResutl3 = count($resultados3[0]);
          $resultados3[0]["cost"] = $cost;
          $resultados3[0]["quantity"] = $listShoppingCarts[$i][1];
          array_push($listProducts,$resultados3[0]);
          $sum = $sum + $cost;
      }

      $_SESSION['PRICE'] =  $sum;
      return $listProducts;
     
    }

    public function insert(){
        $phonecaseid = $_POST["phonecaseid"];
        $amount = $_POST["amount"];
        $userName = $_COOKIE['USERNAME'];
        try{
            $consulta1 = $this->connection->prepare("SELECT id FROM registration where username = '$userName'");
            $consulta1->execute();
            $result1 = $consulta1 -> fetchAll();
            $userid =  $result1[0]["id"];

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
        catch (Exception $e) {
            echo '<script>alert("Có lỗi,' . $e -> getMessage() . '")</script>';
            require_once __DIR__ . "/../view/home.php";
        }
      }
}
?>