<?php
class ShoppingCartModel {
    private $table = "shoppingcart";
    private $connection;

    
    public function __construct($connection) {
		$this->connection = $connection;
    }

    
    public function getAll(){
        if(!isset($_COOKIE["USERNAME"])) {
          echo '<script>alert("Vui lòng đăng nhập")</script>';
          require_once __DIR__ . "/../view/login.php";
        } else {
        $Username = $_COOKIE["USERNAME"];
        $Username = $_POST['session'];
        $consulta1 = $this->connection->prepare("SELECT id FROM registration where username = '$Username'");
        $consulta1->execute();
        $result1 = $consulta1 -> fetchAll();
        $userid =  $result1[0]["id"];

        $consulta2 = $this->connection->prepare("SELECT phonecaseid, amount, price FROM shoppingcart where userid = $userid");
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
     
    }

}
?>