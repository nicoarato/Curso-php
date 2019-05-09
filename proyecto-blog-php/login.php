<?php
//iniciar la sesion y la conexion.

require_once 'includes/conexion.php';

//recoger los datos del formulario
if(isset($_POST)){
    $email = trim($_POST['email']);
    $password = $_POST['password'];


    //hacer una consulta para ver si el mail y contraseña para comprobar credenciales
    $sql = "SELECT * FROM usuarios WHERE email = '$email';";
    $login = mysqli_query($db,$sql);

    if($login && mysqli_num_rows($login) == 1){ //si existe login y la consulta devuelve un renglon
        //devuelve un objeto con lo que devolvió la consulta
        $usuario = mysqli_fetch_assoc($login);
       /*  var_dump($usuario);
        die(); */
        //comprobar la contraseña
        
        $verify = password_verify($password,$usuario['password']);
        if($verify){
            if(isset($_SESSION['error_login'])){
                session_unset();
            }
            
            
            //Utilizar una sesión para guardar los datos del usuario logueado.
            $_SESSION['usuario']=$usuario;

            
        }else{
            //si algo falla, enviar una sesion con el fallo. (no coincide contraseña)
            $_SESSION['error_login'] = "Login incorrecto 1";
        }

    }else{
        //mensaje de error, no coincide con ningun usuario.
        $_SESSION['error_login'] = "Login incorrecto 2";
    }
    
    
}


//Redirigir al index.php
header('Location: index.php');