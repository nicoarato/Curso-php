<?php

function mostrarError($errores,$campo){
    $alerta = '';
    if(isset($errores[$campo]) && !empty($campo)){
        $alerta = "<div class='alerta alerta-error'>".$errores[$campo]."</div>";
    }

    return $alerta;
}

function borrarErrores(){

    $resultado = false;
    if(isset($_SESSION['errores'])){
        $_SESSION['errores'] = null;
        $resultado = session_unset();
    }
    
    if(isset($_SESSION['completado'])){
        $_SESSION['completado'] = null;
        session_unset();
    }
    return $resultado;
}