<?php


//debug
$nombre ="nicolas";
var_dump($nombre);


//fechas

// formateo dia-mes-año
echo "<p>" . date('d-m-y') ."</p>";

echo "<p>" . date('d-M-y') ."</p>";

echo "<p>" . date('d-m-Y') ."</p>";

echo "<p>" . date('D-m-y') ."</p>";

//Fecha en formate UNIX- NUNCA SE REPITE (cambia por segundo)

echo "<p>" . time() ."</p>";

//Matematicas

echo "<p>Raiz cuadrada de 10:  " . sqrt(10) ."</p>";

echo "<p>Numero aleatoreo entre 10 y 40: ". rand(10,40) . "</p>";

echo "<p>Numero PI: ". pi() . "</p>";

echo "<p>Redondeo: ". round(10.2323,2) . "</p>";

echo "<p>Truncado: ". floor(10.2323) . "</p>";

echo "<p>Techo: ". ceil(10.2323) . "</p>";


//Mas funciones generales.

echo "<p>Tipo de dato: " . gettype($nombre) . "</p>"; //Consigue el tipo de una variable.

echo "<p>Es string?: " . is_string($nombre) . "</p>";

echo "<p>Es float?: " . is_float($nombre) . "</p>";

echo "<p>Existe la variable?: " . isset($nombre) . "</p>"; //averigua si una variable existe en el programa

$frase = "      ESTO ES     UNA FRASE     SIN ESPACIOS     DE MÁS";
echo "<p>Sin espacios: " . trim($frase) . "</p>"; //Limpia los espacios antes y despues

//Eliminar variables / indices

$year = 2020;

unset($year); 

//var_dump($year); //devuelve null

//comprobar variable vacia

$texto =""; // False o si no estuviera defiinido arroja true.
if(empty($texto)){
    echo "Vacio";
}

//calcular la longitud de una cadena de texto

echo "<p>$nombre Tiene " . strlen($nombre) ." caracteres</p>";

//encontrar caracter

$frase= "La vida es bella.";

echo "<p>FRASE: $frase , Posición: " . strpos($frase,"v") . "</p>";

//reemplazar contenido

echo "<p>" . str_replace("vida", "moto",$frase) . "</p>" ;

//mayusculas y minusculas

echo strtolower($frase);
echo strtoupper($frase);



?>