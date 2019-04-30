<?php

//mini calculadora
$resultado = false;

if(isset($_POST['n1']) && isset($_POST['n2'])){
    

    if(isset($_POST['sumar'])){
        $resultado = "El resultado es: " . ($_POST['n1'] + $_POST['n2']) ;
    }
    if(isset($_POST['restar'])){
        $resultado = "El resultado es: " . ($_POST['n1'] - $_POST['n2']) ;
    }
    if(isset($_POST['multiplicar'])){
        $resultado = "El resultado es: " . ($_POST['n1'] * $_POST['n2']) ;
    }
    if(isset($_POST['dividir'])){
        $resultado = "El resultado es: " . ($_POST['n1'] / $_POST['n2']) ;
    }
}



?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculadora PHP</title>
</head>
<body>
    <h1>Calculadora PHP</h1>
    <form action="" method="POST">
        <p><label for="n1">Numero1</label>
        <input type="number" name="n1"></p>

        <p><label for="n2">Numero2</label>
        <input type="number" name="n2"></p>

        <input type="submit" value="sumar" name="sumar">
        <input type="submit" value="restar" name="restar">
        <input type="submit" value="multiplicar" name="multiplicar">
        <input type="submit" value="dividir" name="dividir">
    </form>

    <?php
        //resultado
        if($resultado != false){
            echo "<h2>$resultado</h2>";
        }


    ?>


</body>
</html>