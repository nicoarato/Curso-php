<?php
    /*
    for(){
        //bloque de instrucciones
    }
    */
    /*
    $resultado =0;
    for($i=1;$i<=100;$i++){
        $resultado += $i; 
        echo "<p> Resultado: $resultado </p>";
    }
    */
    echo "<hr>";


    if(isset($_GET['numero'])){
        $numero =(int)$_GET['numero']; //casteamos a entero
    }else{
        $numero = 1;
    }


    echo "<h1>Tabla de multiplicar del número $numero</h1>";
    
    

    for($contador=0;$contador <=10; $contador++){

        if($numero < 0){
            echo "No se puede mostrar este resultado";
            break;
        }
        echo "$numero x $contador = " . ($numero*$contador) . "<br>";
    }


?>