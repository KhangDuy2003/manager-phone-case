<?php
class ShoppingCartController{

    private $connecter;
    private $connection;

    public function __construct() {
		require_once  __DIR__ . "/../model/Connecter.php";
        require_once  __DIR__ . "/../model/ShoppingCartModel.php";
        
        $this->connecter=new Connecter();
        $this->connection=$this->connecter->connection();

    }

 
    public function run($accion){
        switch($accion)
        { 
            case "CART" :
                $this->index();
                break;
            case "LOGIN" :
                echo '<script>alert("Vui lòng đăng nhập")</script>';
                require_once __DIR__ . "/../view/login.php";
                break;
          
        }
    }

    public function index(){
        $ShoppingCart =new ShoppingCartModel($this->connection);
        $ShoppingCart=$ShoppingCart->getAll();
        $this->view("product_summary.php",array(
            "listData"=>$ShoppingCart
        ));
    }

    public function insert(){
        $ShoppingCart =new ShoppingCartModel($this->connection);
        $ShoppingCart=$ShoppingCart->insert();
        $this->view("product_summary.php",array(
            "listData"=>$ShoppingCart
        ));
    }
    
    public function deleteCart($id){
        $ShoppingCart =new ShoppingCartModel($this->connection);
        $ShoppingCart=$ShoppingCart->deleteCart($id);
    }
   
    public function view($visit,$data){
        $ShoppingCart = $data["listData"];
       
        require_once  __DIR__ . "/../view/$visit";

    }

}
?>