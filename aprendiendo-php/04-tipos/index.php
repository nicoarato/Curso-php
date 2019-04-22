<?php 


/*

php es un lenguaje debilmente tipado.
Tipos de datos:
int/integer
float 
double
string
bool
null
array
objetos

No pueden empezar con números ni contener guiones medios.
simbolos tampoco.
*/

//Saber el tipo de dato de una variable
$num = 100;
$dec = 27.5;
$cadena = "soy un texto";
$verdadero = true;
$nula = NULL;
echo gettype($num) . " ";
echo gettype($dec) . " ";
echo gettype($cadena) . " ";
echo gettype($verdadero) . " ";
echo gettype($nula) . " ";

//debug

$mi_nombre[] = "Nico Arato";
$mi_nombre[] = "Leo Aranda";
var_dump($mi_nombre);





?>
