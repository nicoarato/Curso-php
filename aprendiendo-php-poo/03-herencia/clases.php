<?php
//Capacidad de compartir atributos

class Persona {
    public $nombre;
    public $apellido;
    public $altura;
    public $edad;

    public function getNombre(){
        return $this->nombre;
    }

    public function getApellido(){
        return $this->apellido;
    }

    public function getAltura(){
        return $this->altura;
    }

    public function getEdad(){
        return $this->edad;
    }



    public function setNombre($nombre){
         $this->nombre= $nombre;
    }

    public function setApellido($apellido){
         $this->apellido=$apellido;
    }

    public function setAltura($altura){
         $this->altura=$altura;
    }

    public function setEdad($edad){
         $this->edad=$edad;
    }

}

class Informatico extends Persona{
    public $lenguajes;
    protected $experienciaProgramador;

    public function __construct(){
        $this->lenguajes ="HTML, JS y CSS";
        $this->experienciaProgramador = 5;
    }

    public function sabeLenguajes($lenguajes){
        $this->lenguajes = $lenguajes;
        return $this->lenguajes;
    }

    public function programar(){
        return "Soy programador";
    }
    
    public function repararOrdenador(){
        return "Reparar ordenadores";
    }
    
    public function hacerOfimatica(){
        return "Uso de Word y Excel";
    }

}

class TecnicoRedes extends Informatico{
    public $auditarRedes;
    public $experiencia;

    public function __construct(){
        parent::__construct(); //Hereda constructor, sino se anula el constructor del padre
        $this->auditarRedes="Experto";
        $this->experiencia= 6;
    }

    public function auditoria(){
        return "Sé auditar una red";
    }
}