<?php
$strFileController='../controller/ShoppingCartController.php';
require_once $strFileController;
$controllerObj=new ShoppingCartController();

if(isset($_GET["de"])){
    $controllerObj-> deleteCart($_GET["de"]);
}
?>