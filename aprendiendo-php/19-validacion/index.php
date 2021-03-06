<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Validación de formulario</title>
</head>
<body>
    <h1>Validar formularios en php</h1>

    <?php
        if(isset($_GET['error'])){
            $error = $_GET['error'];
            if($error == 'faltan_datos'){
                echo '<strong style="color:red">Introduce todos los datos del formulario</strong>';
            }
            if($error == 'nombre'){
                echo '<strong style="color:red">Introduce un NOMBRE válido</strong>';
            }
            if($error == 'apellido'){
                echo '<strong style="color:red">Introduce un Apellido válido</strong>';
            }
            if($error == 'edad'){
                echo '<strong style="color:red">Introduce una EDAD válida</strong>';
            }
            if($error == 'email'){
                echo '<strong style="color:red">Introduce un EMAIL válido</strong>';
            }
            if($error == 'password'){
                echo '<strong style="color:red">Introduce una PASSWORD válido</strong>';
            }
        }
    ?>
    <form action="procesar_formulario.php" method="POST">
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" required="required" pattern="[A-Za-z]+">
        </div>
        
        <div>
            <label for="apellido">Apellido:</label>
            <input type="text" name="apellido" required="required" pattern="[A-Za-z]+">
        </div>
        <div>
            <label for="edad">Edad:</label>
            <input type="number" name="edad" required="required" pattern="[0-9]+">
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" >
        </div>
        
        <div>
            <label for="pass">Contraseña:</label>
            <input type="password" name="pass" required="required" minlength="5">
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>
</body>
</html>