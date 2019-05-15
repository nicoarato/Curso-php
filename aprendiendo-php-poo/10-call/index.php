<?php

class Persona{
    private $nombre;
    private $edad;
    private $ciudad;

    public function __construct($nombre,$edad,$ciudad){
        $this->nombre=$nombre;
        $this->edad= $edad;
        $this->ciudad=$ciudad;
    }

    //Se ejecuta cuando se detecta que se usa un
    //método que no fue definido.
    /* public function __call($name, $arguments){
        return "No existe el método";
    } */

    public function __call($name,$arguments){
        $prefix_metodo = substr($name,0,3);

        if($prefix_metodo == 'get'){
            $nombre_metodo = substr(strtolower($name),3);

            if(!isset($this->$nombre_metodo)){
                return "El Elemento no existe";
            }

            return $this->$nombre_metodo;
        }else{
            return "El metodo invocado no existe.";
        }
    }


}

$persona= new Persona("carlos",19,"Parana");

echo "<p>". $persona->getNombre()."</p>";
echo "<p>". $persona->getEdad() ."</p>";
echo "<p>". $persona->getCiudad()."</p>";
echo "<p>". $persona->getHola()."</p>";