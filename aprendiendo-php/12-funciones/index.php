<?php


function muestraNombres(){
    echo "<p>Nico Arato</p>";
    echo "<p>Leo Lopez</p>";
    echo "<p>Ariel Ortega</p>";
    echo "<p>Leonel oconnor</p>";
}

//muestraNombres();

function tabla($numero){
    echo "<h3>Tabla de multiplicar de $numero</h3>";
    for($i=1;$i<=10;$i++){
        $resultado = $numero*$i;
        echo "<p>$numero x $i =  $resultado </p>";

    }
}

//tabla(5);

//Otro ejemplo

function calculadora($numero1,$numero2){
    
    $suma = $numero1+$numero2;
    echo "<p>Suma: $suma</p>";
    $resta = $numero1-$numero2;
    echo "<p>Suma: $resta</p>";
}

//calculadora(2,6);

//Parametros opcionales

function calculadora2($numero1,$numero2, $negrita=false){
    if($negrita){
        echo "<h1>";
    }
            $suma = $numero1+$numero2;
            echo "<p>Suma: $suma</p>";
            $resta = $numero1-$numero2;
            echo "<p>Suma: $resta</p>";
    if($negrita){
        echo "</h1>";
    }
        
}

/*

calculadora2(2,5,true);
echo "<hr>";
calculadora2(2,3);

*/

function calculadora3($numero1,$numero2, $negrita=false){
    $cadena_texto = "";
    if($negrita){
        $cadena_texto .= "<h1>";
    }
            $suma = $numero1+$numero2;
            $cadena_texto .= "<p>Suma: $suma</p>";
            $resta = $numero1-$numero2;
            $cadena_texto .= "<p>Suma: $resta</p>";
    if($negrita){
        $cadena_texto .= "</h1>";
    }
    return $cadena_texto;    
}

$cadena = calculadora3(11,55);
echo $cadena;


?>

