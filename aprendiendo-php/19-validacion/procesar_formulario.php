<?php
    $error = 'faltan_datos';
    if(empty($_POST['nombre']) && empty($_POST['apellido']) 
    && empty($_POST['edad']) && empty($_POST['email']) 
    && empty($_POST['pass'])){
        $error = 'OK';
        $nombre = $_POST['nombre'];
        $apellido=$_POST['apellido'];
        $edad=$_POST['edad'];
        $email=$_POST['email'];
        $pass=$_POST['pass'];
    }else{
        $error = 'faltan_datos';
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
    
</body>
</html>