<?php
require_once 'includes/redireccion.php';
require_once 'includes/header.php';
require_once 'includes/lateral.php';
?>

<!--Contenido principal-->
<div id="principal">
    <h1>Crear Categoría</h1>
    <p>Añadir nuevas categorías</p>
    <form action="guardar-categoria.php" method="POST">
        <label for="nombre">Nombre de la nueva categoría:</label>
        <input type="text" name="nombre">

        <input type="submit" value="Guardar">

    </form>





</div><!--principal-->

<?php require_once 'includes/footer.php'; ?>