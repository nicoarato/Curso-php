<?php
    //$error = 'faltan_datos';
    if(!empty($_POST['nombre']) && !empty($_POST['apellido']) 
    && !empty($_POST['edad']) && !empty($_POST['email']) 
    && !empty($_POST['pass'])){
        $error = 'OK';
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $edad = (int) $_POST['edad'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        //Validar el nombre
        if(!is_string($nombre) || !preg_match("/[a-zA-Z ]+/", $nombre)){
            $error = 'nombre';
        }
        if(!is_string($apellido) || !preg_match("/[a-zA-Z ]+/", $apellido)){
            $error = 'apellido';
        }
        if(!is_int($edad) || !filter_var($edad, FILTER_VALIDATE_INT) || ($edad>= 125 || $edad < 0) || is_null($edad)){    //!preg_match("/[0-9]+/", $edad)
            $error = 'edad';
        }
        if(!is_string($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){    //!preg_match("/[0-9]+/", $edad)
            $error = 'email';
        }

        if(empty($pass) || strlen($pass)<5){    //!preg_match("/[0-9]+/", $edad)
            $error = 'password';
        }
    
   
    
    }else{
        $error = 'faltan_datos';
    }

    var_dump($_POST);
    var_dump($edad);
    var_dump($error);
    die(); 

    if($error != 'OK'){
        header("Location:index.php?error=$error");
    
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Validación de formularios PHP</title>
</head>
<body>
    <?php if($error == 'OK'): ?>

        <h1>Datos Validados correctamente: </h1>
        <p><?=$nombre?></p>
        <p><?=$apellido?></p>
        <p><?=$edad?></p>
        <p><?=$email?></p>
    
    <?php endif; ?>
</body>
</html>