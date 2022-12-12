<?php
$strFileController='../controller/AccountController.php';
require_once $strFileController;
$controllerObj=new AccountController();

if(isset($_GET["edit"])){
    $controllerObj->edit($_GET["edit"]);
}else{
    $controllerObj->delete($_GET["delete"]);
}
?>