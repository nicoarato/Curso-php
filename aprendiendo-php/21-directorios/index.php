<?php

if(!is_dir('Mi_carpeta')){
    mkdir('Mi_carpeta',0777) or die("No se puede crear el directorio");
    echo "Se creó la carpeta";
}else{
    echo "La carpeta existe";
}

    echo "<hr>OK<br>";

    /* rmdir('Mi_carpeta');
    echo "Carpeta borrada"; */

    echo "<h2>Contenido de la carpeta</h2><br>";
    if($gestor = opendir('./Mi_carpeta')){
        while(false !== ($archivo = readdir($gestor))){
           if($archivo != '.' && $archivo != '..'){
                echo $archivo . "<br>";
            }
        }
    }
?>