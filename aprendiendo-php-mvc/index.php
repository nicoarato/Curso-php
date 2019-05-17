
<h1>Aprendiendo PHP-MVC</h1>
<h2>Controlador Frontal</h2>
<?php 

require_once 'controllers/usuario.php';
require_once 'controllers/nota.php';

//verifico si existe la clase controlador
/*  echo $_GET['controller'] . 'Controller';
    die();  */

if(isset($_GET['controller']) && class_exists($_GET['controller']).'Controller'){
    $nombre_controlador =$_GET['controller'] . 'Controller';
    
    $controlador= new $nombre_controlador();
    //en funcion de la url utilza un método específico
    if(isset($_GET['action']) && method_exists($controlador, $_GET['action'])){
        $action = $_GET['action'];
        $controlador->$action();
    }else{
        echo "La pagina no existe...";
    }

}else{
    echo "La clase no existe";
}


