<?php include_once 'includes/helpers.php'; ?>
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
                <form action="registro.php" method="POST" id="login">
                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombre" >
                    <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombre') : ''; ?>

                    <label for="apellido">Apellido:</label>
                    <input type="text" name="apellido" >
                    <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'apellido') : ''; ?>

                    <label for="email">Email:</label>
                    <input type="email" name="email" >
                    <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'email') : ''; ?>

                    <label for="password">Contraseña:</label>
                    <input type="password" name="password" >
                    <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'password') : ''; ?>

                    <input type="submit" name="submit" value="Registrarse">
                </form>
                <?php borrarErrores(); ?>
            </div>
        </aside>