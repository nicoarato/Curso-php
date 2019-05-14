<?php
require_once 'coche.php';

$coche1 = new Coche("Amarillo", "Renault", "Clio",150,200,2);
$coche2 = new Coche("Rojo", "Seat", "Panda",150,230,2);
$coche3 = new Coche("Verde", "Citroen", "Xara",100,220,2);
$coche4 = new Coche("Azul", "Mercedes", "Clase A",250,200,2);


$coche1->color = "Rosa";


var_dump($coche1);

//$coche1->marca = "FIAT"; //NO
$coche1->setMarca("FIAT"); //SI

echo $coche1->color;

echo $coche1->getMarca();

echo $coche1->getModelo();

var_dump($coche1);

echo $coche1->mostrarInformacion($coche2);