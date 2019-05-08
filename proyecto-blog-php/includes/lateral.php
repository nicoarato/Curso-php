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