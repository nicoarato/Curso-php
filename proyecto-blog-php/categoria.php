
 <?php require_once 'includes/helpers.php'; ?>
 <?php require_once 'includes/conexion.php'; ?>
 <?php
    $categoria_actual = conseguirCategoria($db,$_GET['id']);
    if(!isset($categoria_actual['id'])){
             header('Location: index.php');
    }
    ?>

<?php require_once 'includes/header.php'; ?>
    
<!--barra lateral-->
<?php require_once 'includes/lateral.php'; ?>
    
    
         <!--Contenido principal-->
        <div id="principal">
           
            <h1>Entradas de <?=$categoria_actual['nombre'];?></h1>

            <?php
                $entradas = conseguirEntradas($db,null,$_GET['id']);
                if(!empty($entradas) && mysqli_num_rows($entradas)):
                    while($entrada = mysqli_fetch_assoc($entradas)):
                    
            ?>
            
            <article class="entradas">
                <a href="">
                    <h2><?=$entrada['titulo'];?></h2>
                    <span class="fecha"><?=$entrada['categoria'] . ' | ' .$entrada['fecha'] ;?></span>
                    <p>
                        <?=substr($entrada['descripcion'], 0, 220) . "...";?>
                    </p>
                </a>
            </article>
            <?php
                    endwhile;
                else:?>
                    <div class="alerta">
                        No hay entradas en esta categoría.
                    </div>
                <?php endif;
            ?>
        
            
            
        </div> <!--principal-->
       
    
<!--Footer-->
<?php require_once 'includes/footer.php'; ?>
