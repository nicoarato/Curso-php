
<!--barra lateral-->
<aside id="sidebar">
        <?php if(isset($_SESSION['usuario'])): ?>
            <div id="usuario-logueado" class="block-aside">
                <h3><?= $_SESSION['usuario']['nombre'].' '.$_SESSION['usuario']['apellido'] ; ?></h3>
                <!--Botones-->
                <a href="crear-entrada.php" class="boton">Crear un entrada</a>
                <a href="crear-categoria.php" class="boton">Crear categoría</a>
                <a href="mis-datos.php" class="boton">Mis datos</a>
                <a href="logout.php" class="boton">Cerrar sesión</a>
            </div>

        <?php endif; ?>
        <?php if(!isset($_SESSION['usuario'])): ?>
            <div id="login" class="block-aside">
                <h3>Identificate</h3>

                <?php if(isset($_SESSION['error_login'])): ?>
                     <div class="alerta alerta-error">
                         <h3><?= $_SESSION['error_login'];?></h3>
                    

                     </div>

                 <?php endif; ?>

                <form action="login.php" method="POST" id="login">
                    <label for="email">Email:</label>
                    <input type="email" name="email" >
                    <label for="password">Contraseña:</label>
                    <input type="password" name="password" >
                    <input type="submit" value="Entrar">
                </form>
            </div>

            <div id="register" class="block-aside">


                <h3>Registrate</h3>


                <?php	if(isset($_SESSION['completado'])): ?>
                        <div class="alerta alerta-exito">
                              <?=$_SESSION['completado'];?>
                        </div>
                <?php elseif(isset($_SESSION['errores']['general'])): ?>
                        <div class="alerta alerta-exito">
                              <?=$_SESSION['errores']['general'];?>
                        </div>
                
                <?php   endif; ?>

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
            <?php endif; ?>
        </aside>