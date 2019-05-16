<?php
//que trucazo campeon

function app_autoloader($class){
    //include 'clases/'. $class . '.php';
    //sigue ejecutando el programa con el error

    require_once 'clases/'. $class . '.php'; 
    //muestra los errores al abrir el archivo corta ejecución
}

spl_autoload_register('app_autoloader');