<?php

$pais = "Dinamarca";
$continente = "Europa";

echo "$pais   $continente";

var_dump($pais);

//

echo "<hr>";
for($i=0;$i<=100;$i++){
    if($i%2 == 0){
        echo "$i - ";
    }
}

echo "<hr>";

for($i=0;$i<=40;$i++){
    $square= ($i*$i);
        echo "$square - ";
   
}

echo "<hr>";


if(isset($_GET['numero1']) && isset($_GET['numero2'])){
    $numero1 =(int)$_GET['numero1']; //casteamos a entero
    $numero2 =(int)$_GET['numero2'];
}else{
    echo "Error";
    return 0;
}

$suma = $numero1+$numero2;
$resta = $numero1-$numero2;
echo "<p>Suma:  $suma </p>";  
echo "<p>Resta: $resta</p>";
echo "<p>Multiplicación: " . $numero1*$numero2 . "</p>";
echo "<p>División: " . $numero1/$numero2 . "</p>";


echo "<hr>";


if(isset($_GET['numero1']) && isset($_GET['numero2'])){
    $numero1 =(int)$_GET['numero1']; //casteamos a entero
    $numero2 =(int)$_GET['numero2'];
}else{
    echo "Error";
    return 0;
}

if($numero1 > $numero2){
    $tmp = $numero1;
    $numero1 = $numero2;
    $numero2 = $tmp;
}

for($numero1; $numero1<=$numero2;$numero1++){
    echo "<p>$numero1</p>";
}

echo "<hr>";

echo "<table border='1'><tr>";

echo "<tr>"; //Fila 1
        for($cabecera=1;$cabecera<=10;$cabecera++){
            echo "<td>Tabla del $cabecera</td>";
        }
echo "</tr>";

        for($i=1;$i<=10;$i++){
            echo "</tr>"; //filas
            for($j=1;$j<=10;$j++){
                $k= $i*$j;
                echo "<td>$k</td>";//columnas
            }
            echo "</tr>";
        }



echo "</table>";

echo "<hr>";


if(isset($_GET['numero1']) && isset($_GET['numero2'])){
    $numero1 =(int)$_GET['numero1']; //casteamos a entero
    $numero2 =(int)$_GET['numero2'];
}else{
    echo "Error";
    return 0;
}

if($numero1 > $numero2){
    $tmp = $numero1;
    $numero1 = $numero2;
    $numero2 = $tmp;
}

for($i=$numero1; $i<=$numero2;$i++){
    if($i%2 != 0){
        echo "<p>$i</p>";
    }
}

echo "<hr>";

?>