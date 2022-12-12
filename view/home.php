<?php

if(isset($_GET["id"])){
    $controllerObj=cargarControlador("ID");
}else{
    if(isset($_POST["key_searching"])){
    $controllerObj=cargarControlador("SEARCHING");
    }else{
        $controllerObj=cargarControlador("INDEX");  
    }

}


function cargarControlador($controller){

    switch ($controller) {
        case 'ID':
            $strFileController='../controller/PhoneCaseController.php';
             require_once $strFileController;
            $controllerObj=new PhoneCaseController();
            $controllerObj->run($_GET["id"]);
            break;
        case 'SEARCHING':
                $strFileController='../controller/PhoneCaseController.php';
                 require_once $strFileController;
                $controllerObj=new PhoneCaseController();
                $controllerObj->run('SEARCHING');
                break;
        
        default:
            $strFileController='../controller/PhoneCaseController.php';
            require_once $strFileController;
            $controllerObj=new PhoneCaseController();
            $controllerObj->run("HOME");
            break; 
    }
}

?>