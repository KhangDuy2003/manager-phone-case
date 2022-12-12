<?php
$strFileController='../controller/ShoppingCartController.php';
require_once $strFileController;
$controllerObj=new ShoppingCartController();

if($_POST['session'] != ""){
    $controllerObj->run("CART");
}else{
    $controllerObj->run("LOGIN");
}
?>