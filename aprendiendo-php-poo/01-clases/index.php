<?php 
//POO

//definir una clase

class Coche{
    //atributos.
    public $color = "rojo";
    public $marca = "Ferrari";
    public $modelo = "Aventador";
    public $velocidad = 300;
    public $potencia = 500;
    public $plazas = 2;

    //metodos
    public function getColor(){
        return $this->color;
    }

    public function setColor($color){
        $this->color = $color;
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

}

//instanciar objeto

$coche = new Coche();

// usando metodos


$coche->setColor("Amarillo");
echo "<p>El color del coche es: " . $coche->getColor(). "</p>";

$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
echo "<p>La velocidad del coche es: " . $coche->getVelocidad(). "</p>";
$coche->frenar();
$coche->frenar();
$coche->frenar();
$coche->frenar();

echo "<p>La velocidad del coche es: " . $coche->getVelocidad(). "</p>";