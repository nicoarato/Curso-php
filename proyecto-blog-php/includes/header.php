<?php require_once 'includes/conexion.php'; ?>
<?php require_once 'includes/helpers.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog de Videojuegos</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <!--Header-->
    <header id="header-site">
        <div id="logo">
            <a href="index.php">
                <h1>Blog de videojuegos</h1>
            </a>
        </div>
    <!--Menu-->
    
        <nav id="menu">
            <ul>
                <li><a href="index.php">Inicio</a></li>
                    <?php $categorias = conseguirCategorias($db); ?>
                <li>
                    <?php while($categoria=mysqli_fetch_assoc($categorias)) : ?>
                    <li>
                        <a href="categoria.php?id=<?=$categoria['id'];?>" ><?=$categoria['nombre'];?></a>
                    </li>
                    <?php endwhile; ?>
                </li>
                <li><a href="index.php">Sobre mi</a></li>
                <li><a href="index.php">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <div class="clearfix"></div>
    
    <div id="container">