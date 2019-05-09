<?php



//array de errores
$errores = array();

if(isset($_POST['submit'])){
    require_once 'includes/conexion.php';
    
    if(!isset($_SESSION)){
        session_start();
    }

    //mysqli_real_escape_string escapa las comillas evitando hackeos

    $nombre= isset($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre']) : false;
    $apellido= isset($_POST['apellido']) ?  mysqli_real_escape_string($db, $_POST['apellido']) : false;
    $email= isset($_POST['email']) ?  mysqli_real_escape_string($db, trim($_POST['email'])) : false;
    $password= isset($_POST['password']) ?  mysqli_real_escape_string($db, $_POST['password']) : false;
    
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

    

    $guardar_usuario=false;
    if(count($errores) == 0){
        $guardar_usuario=true;
        //cifrar contraseña
        $password_segura = password_hash($password, PASSWORD_BCRYPT, ['cost'=>4]);
       /*  var_dump($password);
        var_dump($password_segura);

        var_dump(password_verify($password, $password_segura));
        die(); */


        //insertar usuaio en la bdatos en la tabla correspondiente
        $sql = "INSERT INTO usuarios VALUES(null,'$nombre','$apellido','$email','$password_segura', curdate());";
        $guardar = mysqli_query($db, $sql);

        // COMO VER EL ERROR AL INSERTAR
        /* var_dump(mysqli_error($db));
        die(); */

        if($guardar){
            $_SESSION['completado'] = "El registro se ha completado con éxito";
        }else{
            $_SESSION['errores']['general'] = "Fallo al guardar el usuario!!!!";
        }
        
    }else{
        $_SESSION['errores'] = $errores;
    }
}
header('Location: index.php');
