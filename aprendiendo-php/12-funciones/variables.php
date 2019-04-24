<?php

$frase= "Esto es una FRASE";

//echo $frase;

function mostrarFrase(){
    global $frase; //Las variables globales deben definirse como 
                   //global dentro de las funciones que la utilicen
    echo "<h1>$frase</h1>";
}

//mostrarFrase();

//Funciones variables;

function buenDia(){
    return "Buen dia a todos!!!";
}

function buenasTardes(){
    return "Buenas tardes a todos!!!";
}

function buenasNoches(){
    return "Buenas noches a todos!!!";
}

$horario = "buenasNoches";
echo $horario();


?>