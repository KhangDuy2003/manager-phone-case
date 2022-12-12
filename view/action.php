<?php
$strFileController='../controller/AccountController.php';
require_once $strFileController;
$controllerObj=new AccountController();

if(isset($_GET["edit"])){
    $controllerObj->editGet($_GET["edit"]);
}else{
    if(isset($_GET["post"])){
        $controllerObj->editPost();
    }else{
        $controllerObj->delete($_GET["delete"]);
    }
}
?>