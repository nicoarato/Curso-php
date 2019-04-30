<?php

    $archivo = $_FILES['archivo'];
    $nombre = $archivo['name'];
    $tipo = $archivo['type'];

    var_dump($archivo['type']);
    if($tipo == "image/jpg" || $tipo == "image/jpeg" || $tipo == "image/png" || $tipo == "image/gif"){

            if(!is_dir('images')){
                mkdir('images', 0777);
            }
            move_uploaded_file($archivo['tmp_name'],'images/' . $nombre);
            header("Refresh: 5; URL=index.php");
            echo "<p>Imagen subida correctamente</p>";
    }else{
        header("Refresh: 5; URL=index.php");
        echo "<h2>sube una imagen con un formato correcto...</h2>";
    }





?>