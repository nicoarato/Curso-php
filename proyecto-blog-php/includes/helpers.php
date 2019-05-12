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
        $resultado = true;
    }
    
    if(isset($_SESSION['errores_entrada'])){ //setea errores que se muestran al insertar entradas
        $_SESSION['errores_entrada'] = null;
        $resultado = true;
    }

    if(isset($_SESSION['completado'])){
        $_SESSION['completado'] = null;
        $resultado = true;
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

function conseguirCategoria($conexion, $id){
    $sql= "SELECT * FROM categorias WHERE id = $id;";
    $categorias = mysqli_query($conexion,$sql);
    $resultado = array();
    if($categorias && mysqli_num_rows($categorias)>=1){
        $resultado = mysqli_fetch_assoc($categorias);
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


function conseguirTodasEntradas($conexion){
    $sql= "SELECT e.*, c.nombre as 'categoria' FROM entradas e " .
            "inner join categorias c ON " . 
            "e.categoria_id = c.id order by e.id desc;";
    $entradas = mysqli_query($conexion,$sql);
    $resultado = array();
    if($entradas && mysqli_num_rows($entradas)>=1){
        $resultado = $entradas;
    }
    return $resultado;
}

function conseguirEntradas($conexion, $limit = null, $categoria = null){
    $sql= "SELECT e.*, c.nombre as 'categoria' FROM entradas e " .
            "inner join categorias c ON " . 
            "e.categoria_id = c.id ";
    
    if(!empty($categoria)){
        $sql .= "WHERE e.categoria_id = $categoria ";
    }
    
    $sql .= "order by e.id desc ";

    if($limit){
        $sql .= "LIMIT 4";
    }
    
    $sql .= ";";
    
    $entradas = mysqli_query($conexion,$sql);
    $resultado = array();
    if($entradas && mysqli_num_rows($entradas)>=1){
        $resultado = $entradas;
    }
    return $resultado;
}