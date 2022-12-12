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
    public function getAllPhoneCase(){
        $phonecase=new PhoneCaseModel($this->connection);
        $profile=$phonecase->getAll();  
        require_once  __DIR__ . "/../view/phonecasePage.php";
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

    public function editGet($id){
        $phonecase=new PhoneCaseModel($this->connection);
        $phonecasedata=$phonecase->getPhoneCaseById($id);
        $this->view("editPhoneCase.php",array(
            "phonecasedata"=>$phonecasedata
        ));
    }
    public function editPost(){
        $phonecase=new PhoneCaseModel($this->connection);
        $phonecasedata=$phonecase->editPost();
       
    }
    
    

    public function deletePhonecase($id){
        $phonecase=new PhoneCaseModel($this->connection);
        $phonecasedata=$phonecase->deletePhoneCase($id);
    }
    
   
    public function view($visit,$data){
        $phonecasedata = $data["phonecasedata"];  
        require_once  __DIR__ . "/../view/$visit";

    }

}
?>