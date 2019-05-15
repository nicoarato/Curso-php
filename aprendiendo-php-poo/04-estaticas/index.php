<?php

require_once 'configuracion.php';

$Objeto = new Configuracion();

var_dump($Objeto);
$Objeto->setColor("blue");
$Objeto->setEntorno("localhost");
$Objeto->setNewsletter("true");

echo $Objeto->getColor();
echo $Objeto->getEntorno();
echo $Objeto->getNewsletter();


//echo $Objeto->$color;  ERROR
echo $Objeto::$color;  //Se accede de esta manera

var_dump($Objeto);