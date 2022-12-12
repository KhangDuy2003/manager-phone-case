<?php

//Cargamos el controlador y ejecutamos la accion
if(isset($_GET["controller"])){
    // Cargamos la instancia del controlador correspondiente
    $controllerObj=cargarControlador($_GET["controller"]);
    // Lanzamos la acción
    lanzarAccion($controllerObj);
}else{
    // Cargamos la instancia del controlador por defecto
    $controllerObj=cargarControlador("PhoneCaseModel");
    // Lanzamos la acción
    lanzarAccion($controllerObj);
}
function getURI()
{
    $uri = '';

    if (!empty($_SERVER['REQUEST_URI'])) {
        $uri = $_SERVER['REQUEST_URI'];
    }

    if (($cutoff = strpos($uri, '=')) !== false) {
        $uri = substr($uri, $cutoff + 1, strlen($uri));
    }
    return $uri;
}


function cargarControlador($controller){

    $strFileController='../controller/PhoneCaseDetailController.php';
    require_once $strFileController;
    $controllerObj=new PhoneCaseDetailController();
    
    return $controllerObj;
}

function lanzarAccion($controllerObj){
    if(isset($_GET["action"])){
        $controllerObj->run($_GET["action"]);
    }else{
        $index = getURI();
        $controllerObj->run($index);
    }
}

?>