<?php
/*
    Session: almacenar y persistir datos del usuario mientras que navega en un sitio
    web hasta que cierra session o cierra el navegador

*/

//Inicir la session

session_start();

//variable local
$variable_normal = "Soy una cadena de texto";

//variable de session, esta varable la voy a poder utilizar en cualquier
//pagina de mi dominio actual
$_SESSION['variable_persistente'] = "Hola soy una sesión activa";


echo "<p>" . $variable_normal . "</p>";
echo "<p>" . $_SESSION['variable_persistente'] . "</p>";

?>