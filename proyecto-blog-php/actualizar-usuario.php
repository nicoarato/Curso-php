<?php



//array de errores
$errores = array();

if(isset($_POST['submit'])){
    require_once 'includes/conexion.php';

    //mysqli_real_escape_string escapa las comillas evitando hackeos

    $nombre= isset($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre']) : false;
    $apellido= isset($_POST['apellido']) ?  mysqli_real_escape_string($db, $_POST['apellido']) : false;
    $email= isset($_POST['email']) ?  mysqli_real_escape_string($db, trim($_POST['email'])) : false;
    
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
   

    $guardar_usuario=false;
    if(count($errores) == 0){
        $guardar_usuario=true;
        //cifrar contraseña
        $password_segura = password_hash($password, PASSWORD_BCRYPT, ['cost'=>4]);
       /*  var_dump($password);
        var_dump($password_segura);

        var_dump(password_verify($password, $password_segura));
        die(); */
        $usuario = $_SESSION['usuario'];

        //Consultar si el email ya existe.
        $sql ="SELECT id, email FROM usuarios WHERE email = '$email';";
        $isset_email = mysqli_query($db,$sql);
        $isset_user = mysqli_fetch_assoc($isset_email);
        
        if($isset_user['id'] == $usuario['id'] || empty($isset_user)){
            
            //ACTUALIZAR usuario en la bdatos en la tabla correspondiente
            $sql = "UPDATE usuarios SET ".
            "nombre = '$nombre', ". 
            "apellido = '$apellido', ". 
            "email = '$email' " . 
            "WHERE id = " . $usuario['id'] . ";";

            $guardar = mysqli_query($db, $sql);

            // COMO VER EL ERROR AL INSERTAR
            /* var_dump(mysqli_error($db));
            die(); */

            if($guardar){
                $_SESSION['usuario']['nombre'] = $nombre;
                $_SESSION['usuario']['apellido'] = $apellido;
                $_SESSION['usuario']['email'] = $email;

                $_SESSION['completado'] = "La actualización se ha completado con éxito";
            }else{
                $_SESSION['errores']['general'] = "Fallo al actualizar el usuario!!!!";
            }
        }else{
            $_SESSION['errores']['general'] = "El EMAIL ya existe!!!!";
        }
        
    }else{
        $_SESSION['errores'] = $errores;
    }
}
header('Location: mis-datos.php');
