<?php
    //bucles

    /*
    while(condicion){
        bloque de instrucciones
    }
    
    
    */
    
    /*
    $num =0;
    while($num<=100){
        echo "<p>$num</p>";
        $num++;
    }
    */

    echo "<hr>";
    //Ejemplo
    //isset compruba que la variable realmente exista.
    if(isset($_GET['numero'])){
        $numero =(int)$_GET['numero']; //casteamos a entero
    }else{
        $numero = 1;
    }


    echo "<h1>Tabla de multiplicar del número $numero</h1>";
    
    $contador=0;

    while($contador <=10){
        echo "$numero x $contador = " . ($numero*$contador) . "<br>";
        $contador++;
    }
    
    
    //var_dump($numero);

    //DO WHILE
   /*
    do{
        //bloque
    }while(condicion);
    */
    echo "<br>";

    $edad = 18;
    $contador=1;
    do{
        echo "<p>Tienes acceso al salón $contador </p>";
        $contador++;
    }while($edad>18 && $contador <= 10);




?>