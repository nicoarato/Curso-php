<?php
    function mostrar_array($cosas){
        echo "<p> ";
        foreach($cosas as $cosa){
            echo " ". $cosa . "-";
        }
        echo "</p> ";
    }

    $vector= [];
    for($i=0;$i<120;$i++){
        array_push($vector,$i);
    }

    echo "<h1>El vector es el siguiente</h1>";
    
    mostrar_array($vector);

    echo "<hr>";

    $texto = "";

    if(empty($texto)){
        $texto = "ESte es el texto de relleno";
        $txtmayus = strtoupper($texto);
        echo "<strong> $txtmayus </strong>" ;
    }

    echo "<hr>";

    $vector = array("hola mundo",34,354);
    $titulo = "master en php";
    $numero = 54;
    $verdadero = true;

    $todas = [$vector, $titulo, $numero, $verdadero];

    foreach($todas as $algo){
        if(is_string($algo)){
            echo "<p>Es un string</p>";
        }elseif(is_numeric($algo)){
            echo "<p>Es un número</p>";
        }elseif(is_array($algo)){
            echo "<p>Esto es un array</p>";
        }elseif(is_bool($algo)){
            echo "<p>Es un booleano.</p>";
        }
    }

    echo "<hr>";

    $juegos = array(
        'accion'=>array('GTA', 'COD','PUGB'),
        'aventura'=>array('ASSASInS', 'CRASH','Prince of persia'),
        'deportes'=>array('FIFA 19','PES 19', 'MOTOGP19')
    );

    //var_dump(array_keys($juegos));
    
    $categorias =array_keys($juegos);
    ?>

    <table border="1">
        <?php include_once 'ejercicio5/encabezado.php';?>
        <?php include_once 'ejercicio5/primera.php';?>
        <?php include_once 'ejercicio5/segunda.php';?>
        <?php include_once 'ejercicio5/tercera.php';?>
                
        
    </table>

