<?php

if(isset($_POST)){
    //conexion a la base de datos
    require_once 'includes/conexion.php';

    $titulo = isset($_POST['titulo']) ? mysqli_real_escape_String($db, $_POST['titulo']) : false;
    $descripcion = isset($_POST['descripcion']) ? mysqli_real_escape_String($db, $_POST['descripcion']) : false;
    $categoria = isset($_POST['categoria']) ? (int)$_POST['categoria'] : false;
    //sacar el id de usuario
    $usuario = $_SESSION['usuario']['id'];

    //Array de errores
    $errores = array();

    //validar los datos antes de guardar.
    if(!empty($titulo)){
        //echo "El titulo es válido";
        $nombre_validado = true;
    }else{
        $nombre_validado = false;
        $errores['titulo'] = "El titulo es inválido";
    }

    if(!empty($descripcion)){
        //echo "La descripción es válido";
        $nombre_validado = true;
    }else{
        $nombre_validado = false;
        $errores['descripcion'] = "La descripción está vacía";
    }

    if(!empty($categoria) && is_numeric($categoria)){
        //echo "La categoria es válida";
        $nombre_validado = true;
    }else{
        $nombre_validado = false;
        $errores['descripcion'] = "La categoría es inválida";
    }



    if(count($errores) == 0){
        $sql = "INSERT INTO entradas VALUES(null,$usuario,$categoria,'$titulo','$descripcion',curdate());";
        $guardar = mysqli_query($db,$sql);
        header('Location: index.php');
    }else{
        $_SESSION["errores_entrada"] = $errores;
        header('Location: crear-entrada.php');
    }

}
