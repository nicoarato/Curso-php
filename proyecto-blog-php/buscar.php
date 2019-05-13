<?php

    if(!isset($_POST['busqueda'])){
        header('Location: index.php');
    }

?>

<?php require_once 'includes/header.php'; ?>
    
<!--barra lateral-->
<?php require_once 'includes/lateral.php'; ?>
    
    
         <!--Contenido principal-->
        <div id="principal">
           
            <h1>Búsqueda:  <?=$_POST['busqueda'];?></h1>

            <?php
                $entradas = conseguirEntradas($db, null, null, $_POST['busqueda']);
                if(!empty($entradas) && mysqli_num_rows($entradas)>0):
                    while($entrada = mysqli_fetch_assoc($entradas)):
                    
            ?>
            
            <article class="entradas">
                <a href="entrada.php?id=<?=$entrada['id'];?>">
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
