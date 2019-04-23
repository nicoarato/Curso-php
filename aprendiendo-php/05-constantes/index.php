<?php

    define('nombre', 'Nico Arato');
    define('web','google.com');

    //Las constantes se muestran sin $

    echo '<h1>' . nombre . '</h1>';

    //constantes predefinidas
    echo PHP_OS . ' - ' . PHP_VERSION //version de php
                . ' - ' . PHP_EXTENSION_DIR //directorio donde estan instaladas las extensiones
                . ' - ' . __LINE__ //en que línea estoy escribiendo.
                . ' - ' . __FILE__ //ruta completa de este archivo
                . ' - ' . __FUNCTION__; // devuelve el nombre de la funcion que la contiene.
?>