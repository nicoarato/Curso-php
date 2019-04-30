<?php

/* //abrir archivo
    $archivo = fopen("fichero_texto.txt", "a+");

    //scribir en un achivo
    fwrite($archivo, "Soy un texto insertado desde php.");
    //Leer contenido
    while(!feof($archivo)){
        $contenido = fgets($archivo);
        echo $contenido . "<br>";
    }

    

    //cerrar archivo
    fclose($archivo); */


    //copy("fichero_texto.txt", "archivo_copiado.txt") or die("Error de copiado");

    //renombrar

    //rename('archivo_copiado.txt', 'archivo_renombrado.txt');

    //eliminar archivo
    //unlink('archivo_renombrado.txt') or die("Error al borrar");

    //comprobar si un archivo existe
    if(file_exists('fichero_texto.txt')){
        echo "El archivo existe" ."<br>";
    }else{
        echo "El archivo no existe";
    }

    echo "Actualizado";
?>