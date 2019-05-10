<?php
require_once 'includes/redireccion.php';
require_once 'includes/header.php';
require_once 'includes/lateral.php';
?>

<!--Contenido principal-->
<div id="principal">
    <h1>Crear Entrada</h1>
    <p>Añadir nuevas Entradas</p>
    <form action="guardar-entrada.php" method="POST">
        <label for="titulo">Nombre de la nueva entrada:</label>
        <input type="text" name="titulo">
        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'],'titulo') : ''; ?>

        <label for="descripcion">Descripción de la nueva entrada:</label>
        <textarea name="descripcion"></textarea>
        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'],'descripcion') : ''; ?>

        <label for="categoria">Categoría de la nueva entrada:</label>
        <select name="categoria" id="">
            <?php $categorias = conseguirCategorias($db);
            if(!empty($categorias)):
                while($categoria= mysqli_fetch_assoc($categorias)): ?>
                    <option value="<?=$categoria['id'];?>">
                    <?= $categoria['nombre'];?>
                    </option>
            <?php endwhile;
            endif; ?>
        </select>
        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'],'categoria') : ''; ?>
        <input type="submit" value="Guardar">

    </form>
    <?php borrarErrores(); ?>
</div><!--principal-->

<?php require_once 'includes/footer.php'; ?>