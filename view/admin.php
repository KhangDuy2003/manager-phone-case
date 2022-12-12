<?php


$accion = $_GET['route'];
switch($accion)
        { 
            case "USER" :
                $strFileController='../controller/AccountController.php';
                require_once $strFileController;
                $controllerObj=new AccountController();
                $controllerObj->getAllUser();
                break;
            case "PHONE_CASE" :
                $strFileController='../controller/PhoneCaseController.php';
                require_once $strFileController;
                $controllerObj=new PhoneCaseController();
                $controllerObj->getAllPhoneCase();
                break;
            default:
                $this->getPhoneCaseById($accion);
                break;
        }

?>