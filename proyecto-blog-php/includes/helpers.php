<?php

require_once 'conexion.php';
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

function conseguirCategorias($conexion){
    $sql= "SELECT * FROM categorias order by id;";
    $categorias = mysqli_query($conexion,$sql);
    $resultado = array();
    if($categorias && mysqli_num_rows($categorias)>=1){
        $resultado = $categorias;
    }
    return $resultado;
}

function conseguirUltimasEntradas($conexion){
    $sql= "SELECT e.*, c.nombre as 'categoria' FROM entradas e " .
            "inner join categorias c ON " . 
            "e.categoria_id = c.id order by e.id desc LIMIT 4;";
    $entradas = mysqli_query($conexion,$sql);
    $resultado = array();
    if($entradas && mysqli_num_rows($entradas)>=1){
        $resultado = $entradas;
    }
    return $resultado;
}