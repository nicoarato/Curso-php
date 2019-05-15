<?php

//Para no utilizar herencia, sirve para 
//compartir definiciones de métodos en varias clases.
trait Utilidades{
    public function mostrarNombre(){
        echo "<h1>El nombre es ".$this->nombre."</h1>";
    }

}

class Coche{
    public $nombre;
    public $marca;

    public function __construct($nombre, $marca){
        $this->nombre=$nombre;
        $this->marca=$marca;
    }

    use Utilidades;
}

class Persona{
    public $nombre;
    public $apellido;
    
    use Utilidades;
}

class VideoJuego{
    public $nombre;
    public $anio;
    
    use Utilidades;
}

$auto = new Coche("Palio","Fiat");

$auto->mostrarNombre();