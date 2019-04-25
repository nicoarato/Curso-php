<?php

    $numeros = [1,2,5,4,8,7,9];

    echo "<h1>Estos son los números</h1>";
    foreach($numeros as $num){
        echo "<p>" . $num . "</p>";
    }

    echo "<h1>Estos son los números ordenados</h1>";

    sort($numeros);

    foreach($numeros as $num){
        echo "<p>" . $num . "</p>";
    }

    echo "<h2>Su longitud es :  " . count($numeros) . "</h2>";
    $buscar=8;
   
    $search= array_search($buscar,$numeros);
    if(!empty($search)){
        echo "<p>El elemento existe en el array en el indice $search.</p>";
    }else{
        echo "<p>El elemento NO existe en el array.</p>";
    }
    
?>