<?php
class Coche{
    //atributos.
    public $color; //acceder desde adentro y fuera de la clase
    protected $marca;  // desde la clase que los definen y hereden
    private $modelo; // unicamente desde esta clase.
    public $velocidad;
    public $potencia;
    public $plazas;

    /* public function __construct(){
        $this->color = "rojo";
        $this->marca = "Ferrari";
        $this->modelo = "Aventador";
        $this->velocidad = 300;
        $this->potencia = 500;
        $this->plazas = 2;
    } */

    public function __construct($color, $marca,$modelo,$velocidad,$potencia,$plazas){
        $this->color = $color;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->velocidad = $velocidad;
        $this->potencia = $potencia;
        $this->plazas = $plazas;
    
    }
    //metodos
    public function getColor(){
        return $this->color;
    }

    public function setColor($color){
        $this->color = $color;
    }

    public function setMarca($marca){
        $this->marca = $marca;
    }

    public function getMarca(){
        return $this->marca;
    }

    public function acelerar(){
        $this->velocidad++;
    }

    public function frenar(){
        $this->velocidad--;
    }

    public function getVelocidad(){
        return $this->velocidad;
    }

    public function setModelo($modelo){
        $this->modelo = $modelo;
    }

    public function getModelo(){
        return $this->modelo;
    }


    public function mostrarInformacion(Coche $miObjeto){
        $info = "<h1>Información del Coche: </h1>";
        $info .="<p>Color: " . $miObjeto->color. "</p>";
        $info .="<p>Marca: " . $miObjeto->marca . "</p>";
        $info .="<p>Modelo: " . $miObjeto->modelo . "</p>";

        return $info;
    }



}