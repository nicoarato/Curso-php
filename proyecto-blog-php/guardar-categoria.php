<?php

if(isset($_POST)){
    //conexion a la base de datos
    require_once 'includes/conexion.php';

    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_String($db, $_POST['nombre']) : false;

    //Array de errores
    $errores = array();

    //validar los datos antes de guardar.
    if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)){
        //echo "El nombre es válido";
        $nombre_validado = true;
    }else{
        $nombre_validado = false;
        $errores['nombre'] = "El nombre es inválido";
    }

    if(count($errores) == 0){
        $sql = "INSERT INTO categorias VALUES(null,'$nombre');";
        $guardar = mysqli_query($db,$sql);
    }

}
header('Location: index.php');