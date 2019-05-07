<?php
    //conectar a la bdatos
    //$conexion = mysqli_connect($host,$user, $password,$database, $port, $socket);
    $conexion = mysqli_connect("localhost", "root","","phpmysql");

    //comprar si la conexion es correcta
    if(mysqli_connect_errno()){ //error de la ultima conexion
        echo "La conexion a la base de datos Mysql ha fallado: " . mysqli_connect_error() ;
    }else{
        echo "Conexión realizada correctamente!!!!!!";
    }

    //Consulta para configurar la codificación de caracteres.
    mysqli_query($conexion, "SET NAMES 'utf8'");

    //consulta select desde php

    $query = mysqli_query($conexion,"SELECT * FROM notas");

    
    while($nota = mysqli_fetch_assoc($query)){
        //var_dump($nota);
        echo '<h1>' . $nota['titulo'] . '</h1>';
        echo '<p>' . $nota['descripcion'] . '</p>';
    }
   
    //Para insertar en la base de datos desde php
    /* $sql = "INSERT INTO notas VALUES(null,'Nota desde php', 'Esto es una nota de PHP','green')";
    $insert = mysqli_query($conexion,$sql);

    if($insert){
        echo "Datos insertados correctamente";
    }else{
        echo "Error: " . mysqli_error($conexion);
    } */

?>