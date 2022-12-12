<?php
$strFileController='../controller/PhoneCaseController.php';
require_once $strFileController;
$controllerObj=new PhoneCaseController();

if(isset($_GET["edit"])){
    $controllerObj->editGet($_GET["edit"]);
}else{
    if(isset($_GET["post"])){
        if($_GET["post"] === "in"){
            $controllerObj->create();
        }else{
            $controllerObj->editPost();
        }
    }else{
        $controllerObj->deletePhonecase($_GET["delete"]);
    }
}
?>