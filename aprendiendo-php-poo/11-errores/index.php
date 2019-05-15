<?php

//try y catch sirven para capturar excepciones susceptible 
//a errores
try{
    if(isset($_GET['id'])){
    echo "<h1>El parametro es: {$_GET['id']}</h1>";
}else{
    throw new Exception('<p>Faltan parámetros por la url.</p>');
}
} catch (Exception $e){
    echo "<p>Hubo un error ". $e->getMessage() . "</p>";
} finally { //puede omitirse
    echo "<p>Todo Correcto</p>";
}
