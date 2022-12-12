<?php
$strFileController='../controller/AccountController.php';
require_once $strFileController;
$controllerObj=new AccountController();
$controllerObj->getAllUser();
?>