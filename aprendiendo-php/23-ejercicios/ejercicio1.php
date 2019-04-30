<?php
    session_start(); //inicio session

    if(!isset($_SESSION["numero"])){ //si no existe la defino
        $_SESSION['numero'] = 0;
    }

    if(isset($_GET['counter']) && $_GET['counter'] == 1){
        $_SESSION['numero']++;
    }

    if(isset($_GET['counter']) && $_GET['counter'] == 0){
        $_SESSION['numero']--;
    }



?>
<h1>El valor de la session numero es: <?=$_SESSION["numero"]?></h1>
<a href="index.php?counter=1">Aumentar el valor</a><br>
<a href="index.php?counter=0">Disminuir el valor</a>