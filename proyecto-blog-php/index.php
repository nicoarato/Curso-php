<?php require_once 'includes/header.php'; ?>
    
<!--barra lateral-->
<?php require_once 'includes/lateral.php'; ?>
    
    
         <!--Contenido principal-->
        <div id="principal">
            <h1>Ultimas entradas</h1>

            <?php
                $entradas = conseguirUltimasEntradas($db);
                if(!empty($entradas)):
                    while($entrada = mysqli_fetch_assoc($entradas)):
                    
            ?>
            <?php// var_dump($entrada);?>
            <?php //die();?>
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
                endif;
            ?>
        
            
            <div id="ver-todas">
                <a href="">Ver todas las entradas</a>
            </div>
        </div> <!--principal-->
       
    
<!--Footer-->
<?php require_once 'includes/footer.php'; ?>
