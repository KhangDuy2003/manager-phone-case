<?php
$strFileController='../controller/PhoneCaseController.php';
require_once $strFileController;
$controllerObj=new PhoneCaseController();

if(isset($_GET["edit"])){
    $controllerObj->editGet($_GET["edit"]);
}else{
    if(isset($_GET["post"])){
        $controllerObj->editPost();
    }else{
        $controllerObj->deletePhonecase($_GET["delete"]);
    }
}
?>