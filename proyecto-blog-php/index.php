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
                <li><a href="index.php">Categoría 1</a></li>
                <li><a href="index.php">Categoría 2</a></li>
                <li><a href="index.php">Categoría 3</a></li>
                <li><a href="index.php">Categoría 4</a></li>
                <li><a href="index.php">Sobre mi</a></li>
                <li><a href="index.php">Contacto</a></li>
            </ul>
        </nav>
    </header>
    <div class="clearfix"></div>
    
    <div id="container">
    <!--barra lateral-->
        <aside id="sidebar">
            <div id="login" class="block-aside">
                <h3>Entrar a la web</h3>
                <form action="login.php" method="POST" id="login">
                    <label for="email">Email:</label>
                    <input type="email" name="email" >
                    <label for="pass">Contraseña:</label>
                    <input type="password" name="pass" >
                    <input type="submit" value="Entrar">
                </form>
            </div>

            <div id="register" class="block-aside">
                <h3>Registrate</h3>
                <form action="login.php" method="POST" id="login">
                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombre" >

                    <label for="apellido">Apellido:</label>
                    <input type="text" name="apellido" >

                    <label for="email">Email:</label>
                    <input type="email" name="email" >

                    <label for="pass">Contraseña:</label>
                    <input type="password" name="pass" >

                    <input type="submit" value="Registrarse">
                </form>
            </div>
        </aside>
    
    
    <!--Contenido principal-->
        <div id="principal">
            <h1>Ultimas entradas</h1>
            <article class="entradas">
                <a href=""><h2>Titulo de mi entrada</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt, 
                    velit repellat? A quasi praesentium architecto aperiam? Nulla illum quibusdam a nihil adipisci quaerat reiciendis eos eum ab, repudiandae quidem ut.</p>
                </a>
            </article>
        
            <article class="entradas">
                <a href=""><h2>Titulo de mi entrada</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt, 
                    velit repellat? A quasi praesentium architecto aperiam? Nulla illum quibusdam a nihil adipisci quaerat reiciendis eos eum ab, repudiandae quidem ut.</p>
                </a>
            </article>

            <article class="entradas">
                <a href=""><h2>Titulo de mi entrada</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt, 
                    velit repellat? A quasi praesentium architecto aperiam? Nulla illum quibusdam a nihil adipisci quaerat reiciendis eos eum ab, repudiandae quidem ut.</p>
                </a>
            </article>

            <article class="entradas">
                <a href=""><h2>Titulo de mi entrada</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt, 
                    velit repellat? A quasi praesentium architecto aperiam? Nulla illum quibusdam a nihil adipisci quaerat reiciendis eos eum ab, repudiandae quidem ut.</p>
                </a>
            </article>
            <div id="ver-todas">
                <a href="">Ver todas las entradas</a>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    
    <!--Footer-->
    <footer id="footer-site">
        <p>Desarrollado por Nico Arato &copy; 2019 - Todos los derechos reservados.</p>
    </footer>
</body>
</html>