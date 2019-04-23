<?php

//condicionales
/*
    if() {
        instrucciones
    }else{
        otras condiciones
    }

*/

//operadores de comparación
/*
    == igual 
    === identico (tipo de dato)
    != distinto
    <> diferente
    !== no identico
    < menor que
    > mayor que 
    <= menor o igual que
    >= mayor o igual que 

    Operadores Lógicos

    && and
    || or 
    ! not
    and , or


*/


$color = "verde";

if($color == "rojo"){
    echo "El color es rojo";
}else {
    echo "el color no es rojo";
}

$year= "2019";

if($year === '2019'){
    echo "Estamos en 2019";
}else {
    echo "No estamos en 2019";
}

//Ejemplo

$dia = 5;
echo "<p>"; 
if($dia == 1){
    echo "Lunes";
}elseif($dia == 2){
    echo "Martes";
}elseif($dia == 3){
    echo "Miercoles";
}elseif($dia == 4){
    echo "Jueves";
}elseif($dia == 5){
    echo "Viernes";
}else{
    echo "Es Fin de semana";
}
echo " " . "</p>";

$pais = "Mexico";

if($pais == "Mexico" || $pais == "España"){
    echo " <p>" . "Se habla español";
}else{
    echo "No se habla español";
}

echo " </p>";

$dia = 0;

switch($dia){
    case 1:
        echo "Lunes";
        break;
    case 2:
        echo "Martes";
        break;
    case 3:
        echo "Miercoles";
        break;
    case 4:
        echo "Jueves" ;
        break;
    default:
        echo "Fin de semana";
}

//GO TO

echo "<h3>Instruccion 1</h3>";
echo "<h3>Instruccion 2</h3>";

goto marca;

echo "<h3>Instruccion 3</h3>";
echo "<h3>Instruccion 4</h3>";

marca:
echo "Salté hasta la marca";


?>