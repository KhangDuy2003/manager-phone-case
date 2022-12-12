<?php
class AccountController{

    private $connecter;
    private $connection;

    public function __construct() {
		require_once  __DIR__ . "/../model/Connecter.php";
        require_once  __DIR__ . "/../model/accountmodel.php";
        
        $this->connecter=new Connecter();
        $this->connection=$this->connecter->connection();

    }

 
    public function run($param){

        switch($param)
        { 
            case "LOGIN" :
                $account=new accountmodel($this->connection);
                $result = $account->login();
                break;
            case "PROFILE" :
                    $account=new accountmodel($this->connection);
                    $account = $account->profile();
                   
                    if(isset($account)){
                        $this->view("profile.php",array(
                            "account"=>$account
                        ));
                    }
                    break;
            default:
                $account=new accountmodel($this->connection);
                $account-> Register();
                break;
        }
       
    }
    public function getAllUser(){
        $account=new accountmodel($this->connection);
        $user = $account-> getAllUser();
        $this->view("adminPage.php",array(
            "account"=>$user
        ));
    }

   
    public function view($visit,$data){
        $profile = $data["account"];  
        require_once  __DIR__ . "/../view/$visit";

    }

}
?>