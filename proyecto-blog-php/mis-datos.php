<?php
require_once 'includes/redireccion.php';
require_once 'includes/header.php';
require_once 'includes/lateral.php';
?>

<!--Contenido principal-->
<div id="principal">
    <h1>Mis Datos</h1>

    <?php	if(isset($_SESSION['completado'])): ?>
                        <div class="alerta alerta-exito">
                              <?=$_SESSION['completado'];?>
                        </div>
                <?php elseif(isset($_SESSION['errores']['general'])): ?>
                        <div class="alerta alerta-exito">
                              <?=$_SESSION['errores']['general'];?>
                        </div>
                
                <?php   endif; ?>

                <form action="actualizar-usuario.php" method="POST" id="login">
                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombre" value="<?=$_SESSION['usuario']['nombre'];?>">
                    <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombre') : ''; ?>

                    <label for="apellido">Apellido:</label>
                    <input type="text" name="apellido"  value="<?=$_SESSION['usuario']['apellido'];?>">
                    <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'apellido') : ''; ?>

                    <label for="email">Email:</label>
                    <input type="email" name="email"  value="<?=$_SESSION['usuario']['email'];?>">
                    <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'email') : ''; ?>

                    <input type="submit" name="submit" value="Actualizar">
                </form>
                <?php borrarErrores(); ?>






</div> <!--fin principal-->

<?php require_once 'includes/footer.php'; ?>