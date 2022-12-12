<?php
class PhoneCaseController{

    private $connecter;
    private $connection;

    public function __construct() {
		require_once  __DIR__ . "/../model/Connecter.php";
        require_once  __DIR__ . "/../model/PhoneCaseModel.php";
        
        $this->connecter=new Connecter();
        $this->connection=$this->connecter->connection();

    }

 
    public function run($accion){
        switch($accion)
        { 
            case "HOME" :
                $this->index();
                break;
            case "SEARCHING" :
                $this->search();
                break;
            default:
                $this->getPhoneCaseById($accion);
                break;
        }
    }

    public function index(){
        $phonecase=new PhoneCaseModel($this->connection);
        $phonecasedata=$phonecase->getAll();
        $this->view("index.php",array(
            "phonecasedata"=>$phonecasedata
        ));
    }

    public function search(){
        $phonecase=new PhoneCaseModel($this->connection);
        $phonecasedata=$phonecase->getAllByProductName($_POST["key_searching"]);
        $this->view("index.php",array(
            "phonecasedata"=>$phonecasedata
        ));
    }

    public function getPhoneCaseById($id){
        $phonecase=new PhoneCaseModel($this->connection);
        $phonecasedata=$phonecase->getPhoneCaseById($id);
        $this->view("product_details.php",array(
            "phonecasedata"=>$phonecasedata
        ));
    }
    
   
    public function view($visit,$data){
        $phonecasedata = $data["phonecasedata"];  
        require_once  __DIR__ . "/../view/$visit";

    }

}
?>