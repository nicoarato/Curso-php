<?php
//autoload o autocarga de clases.



/*
//usando requires manuales.
require_once 'usuario.php';
require_once 'categoria.php';
require_once 'entrada.php';
*/

/*autoload */
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

use PanelAdministrador\Usuario as UsuarioAdmin; //Debo instanciar UsuarioAdmin

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
}

//Objeto principal
$principal = new Principal();
var_dump($principal->usuario);
var_dump($principal->categoria);

//objeto de otro namespace
//$usuario = new PanelAdministrador\Usuario("carlos Manguel", "cmanguel@yahoo.com","Redmine");
$usuario = new UsuarioAdmin("carlos Manguel", "cmanguel@yahoo.com","Redmine");
var_dump($usuario);