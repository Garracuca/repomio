<?php
//http:\\mvc.local/user/index
//http:\\mvc.local/user/index.php?url=user/index
// La peticion get :
// http://mvc. local/controlador/metodo/arg1/arg
// http://mvc.local/user/show/1
// /user/show/1/
// -> user/show/1 (trim) -> [user, show, 1] (explode)

class App
{
    function __construct()
    {//transformacion para el controlador
        isset($_GET["url"]) ? $url = $_GET["url"] : $url = "home";
        // $url= isset($_GET["url"]) ?  $_GET["url"] : "home"
        $arguments = explode('/', trim($url, '/'));

        //obtener controlador
        $controllerName = array_shift($arguments); //user| product| home...
                                                    //UserController, ProductController
        $controllerName = ucwords($controllerName) . "Controller";
    //transformacion para el metodo 
    count($arguments) ? $method = array_shift($arguments) : $method="Index";

    //$method = count($arguments) ? array_shift($arguments) : "Index";

    // $edad=rand(1,99);
    // echo $edad>= 17 ? "Adulto" : "Menor";

    //importar el controlador
    $file = "../app/controllers/$controllerName" . ".php";
        if(file_exists($file)){
            require_once $file;
        }else{
            http_response_code(404);
            echo "recurso no encontrado";
           die ();
        }
     //fin construct
//CREAR INSTANCIA DEL CONTROLADOR Y LLAMAR AL METODO
$controllObject= new $controllerName;
$controllObject->$method($arguments);

if(method_exists($controllerObject,$method)){

}else{
    http_response_code(404);
    echo "recurso no encontrado";
   die ();
}
}
}
