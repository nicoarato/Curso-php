<?php
    /*Para mostrar el valor de las cookies tengo que usar 
    $_COOKIE, una variable superglobal, es un array asociativo.
     */


if(isset($_COOKIE['micookie'])){
    echo "<h1>" . $_COOKIE['micookie'] . "</h1>";
}else {
    echo "no existe cookie";
}


if(isset($_COOKIE['unyear'])){
    echo "<h1>" . $_COOKIE['unyear'] . "</h1>";
}else {
    echo "no existe cookie";
}
?>
<a href="borrar_cookies.php">Borar cookies</a>
<a href="crear_cookies.php">Crear cookies</a>