<?php
$strFileController='../controller/ShoppingCartController.php';
require_once $strFileController;
$controllerObj=new ShoppingCartController();
if(isset($_COOKIE['USERNAME'])){
    $controllerObj->run("CART");
}else{
    $controllerObj->run("LOGIN");
}
?>