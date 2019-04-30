<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Subir archivos en php</title>
</head>
<body>
    <h1>Subir archivos</h1>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="archivo">
        <input type="submit" value="Enviar">

    </form>

    <h1>Listado de imágenes:</h1>
    <?php
    $gestor = opendir('./images');
    if($gestor){
        while(($image = readdir($gestor)) !== false){
            if($image != '.' && $image != '..'){

                echo "<img src='images/$image' width='200px' /><br>";
            }
        }
    }


    ?>




</body>
</html>