<?php
session_start();

//array de errores
$errores = array();

if(isset($_POST['submit'])){
    
    $nombre= isset($_POST['nombre']) ? $_POST['nombre'] : false;
    $apellido= isset($_POST['apellido']) ? $_POST['apellido'] : false;
    $email= isset($_POST['email']) ? $_POST['email'] : false;
    $password= isset($_POST['password']) ? $_POST['password'] : false;
    
    //var_dump($_POST);

    



    //validar los datos antes de guardar.
    if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)){
        //echo "El nombre es válido";
        $nombre_validado = true;
    }else{
        $nombre_validado = false;
        $errores['nombre'] = "El nombre es inválido";
    }

    if(!empty($apellido) && !is_numeric($apellido) && !preg_match("/[0-9]/", $apellido)){
        //echo "El apellido es válido";
        $apellido_validado = true;
    }else{
        $apellido_validado = false;
        $errores['apellido'] = "El apellido es inválido";
    }

    if(!empty($email)  && filter_var($email, FILTER_VALIDATE_EMAIL)){
        //echo "El email es válido";
        $email_validado = true;
    }else{
        $email_validado = false;
        $errores['email'] = "El email es inválido";
    }

    if(!empty($password)){
        //echo "El password es válido";
        $password_validado = true;
    }else{
        $password_validado = false;
        $errores['password'] = "El password es inválido";
    }

    //var_dump($errores);

    $guardar_usuario=false;
    if(count($errores) == 0){
        //insertar usuaio en la bdatos en la tabla correspondiente
        $guardar_usuario=true;
    }else{
        $_SESSION['errores'] = $errores;
        header('Location: index.php');
    }
}
