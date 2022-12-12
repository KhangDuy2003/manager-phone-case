<?php
$strFileController='../controller/AccountController.php';
require_once $strFileController;
$controllerObj=new AccountController();

if(isset($_GET["re"])){
    $controllerObj->run("REGITER");
}else{
    if(isset($_GET["profile"])){
        $controllerObj->run("PROFILE");
    }else{
        $controllerObj->run("LOGIN");
    }
}
?>