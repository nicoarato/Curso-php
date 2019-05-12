
 <?php require_once 'includes/helpers.php'; ?>
 <?php require_once 'includes/conexion.php'; ?>
 <?php
    $entrada_actual = conseguirEntrada($db,$_GET['id']);

    if(!isset($entrada_actual['id'])){
             header('Location: index.php');
    }
    ?>

<?php require_once 'includes/header.php'; ?>
    
<!--barra lateral-->
<?php require_once 'includes/lateral.php'; ?>
    
    
         <!--Contenido principal-->
        <div id="principal">
           
            <h1><?=$entrada_actual['titulo'];?></h1>
            <a href="categoria.php?id=<?=$entrada_actual['categoria_id'];?>">
                <h2><?=$entrada_actual['categoria'];?></h2>
            </a>
            <h4><?=$entrada_actual['fecha'];?></h4>
            <p>
                <?=$entrada_actual['descripcion'];?>
            </p>
            
            
        </div> <!--principal-->
       
    
<!--Footer-->
<?php require_once 'includes/footer.php'; ?>
