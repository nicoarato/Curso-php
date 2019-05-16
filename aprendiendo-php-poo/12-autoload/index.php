<?php
//autoload o autocarga de clases.



/*
//usando requires manuales.
require_once 'usuario.php';
require_once 'categoria.php';
require_once 'entrada.php';
*/

/*autoload */
 //require_once 'autoload.php';
 require_once 'autoload.php';
/*

$usuario = new Usuario("Mario Carles", "mcales@gmail.com");

echo "<p>". $usuario->nombre. "</p>";

$categoria = new categoria("Politica", "Sección correspondiente a la politica");

echo "<p>". $categoria->nombre. "</p>"; */

//namespace

//USO las clases en el namespace
//use MisClases\Usuario; 
//use MisClases\Categoria;

//en php 7 se puede hacer en una sola linea
use MisClases\Usuario, MisClases\Categoria;

//use PanelAdministrador\Usuario as UsuarioAdmin; //Debo instanciar UsuarioAdmin

class Principal{
    public $usuario;
    public $categoria;
    public $entrada;

    public function __construct(){
        //comentadas las opciones sin el USE MisClases
        //$this->usuario= new MisClases\Usuario("Mario Carles", "mcales@gmail.com");
        $this->usuario= new Usuario("Mario Carles", "mcales@gmail.com");
        //$this->categoria=new MisClases\Categoria("Politica", "Sección correspondiente a la politica");
        $this->categoria=new Categoria("Politica", "Sección correspondiente a la politica");

    }

    public function getNombre(){}

    public function informacion(){
    //  echo __CLASS__; //Devuelve el nombre de la clase
       // echo __METHOD__ ; //Devuelve el nombre el metodo y desde donde
                        // se está utilizando
        echo __FILE__ ; //El fichero desde donde se está utilizando
        echo __NAMESPACE__; //muestra el namespace en el que esta definido
    }
}

//Objeto principal
$principal = new Principal();
var_dump($principal->usuario);
var_dump($principal->categoria);

//Constantes para clases
$principal->informacion();





//objeto de otro namespace
//$usuario = new PanelAdministrador\Usuario("carlos Manguel", "cmanguel@yahoo.com","Redmine");
/* $usuario = new UsuarioAdmin("carlos Manguel", "cmanguel@yahoo.com","Redmine");
var_dump($usuario); */





//Comprobar los métodos de una clase
var_dump(get_class_methods($principal));

//
$metodos = get_class_methods($principal);
//verifico que funciona getNombre en la clase.
$busqueda = array_search('getNombre', $metodos);

var_dump($busqueda);



//Comprobar si existe una clase.
//Prueba con una clase que no estoy utilizando aquí.
//Con el arroba no muestra los errores.

$clase= @class_exists('PanelAdministrador\Usuario');
if($clase){
    echo "<h1>La clase existe!!!!!</h1>";
}else{
    echo "<h1>La clase NO existe!!!!!</h1>";
    //solo entra cuando el autoloader utiliza un include
    //con require no entra. 
}

