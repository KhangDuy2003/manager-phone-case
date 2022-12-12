<?php
$strFileController='../controller/ShoppingCartController.php';
require_once $strFileController;
$controllerObj=new ShoppingCartController();

if(isset($_COOKIE['USERNAME'])){
    $controllerObj->insert();
}else{
    $controllerObj->run("LOGIN");
}
?>