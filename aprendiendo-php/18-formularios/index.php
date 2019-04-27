<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formularios PHP y HTML</title>
</head>
<body>
    <h1>Formulario</h1>
    <form action="" method= "POST" enctype="multipart/form-data">
        <label for="nombre">Nombre: </label>
        <p><input type="text" name="nombre"></p>
        <label for="apellido">Apellido: </label>
        <p><input type="text" name="apellido" value="ApellidoSS"></p> 
        <!--disabled="disabled" autofocus="autofocus" minlength="5" pattern="[A-Z]+" required="required" placeholder="Apellido"-->
        <label for="boton">Botón: </label>
        <p><input type="button" name=Boton" value="Botón"></p> 
        
        <label for="sexo">Sexo: </label>
        <p>
          Hombre: <input type="checkbox" name="sexo" value="hombre">
          Mujer: <input type="checkbox" name="sexo" value="mujer" checked="checked">
        </p> 
        
        <label for="color">Color: </label>
        <p><input type="color" name="color" value="color"></p> 
        
        <label for="fecha">Fecha: </label>
        <p><input type="date" name="fecha" ></p>
        
        
        <label for="correo">Correo: </label>
        <p><input type="email" name="correo"></p>
        
        <label for="archivo">Archivo: </label>
        <p><input type="file" name="archivo" multiple="multiple"></p>

        <label for="numero">Número: </label>
        <p><input type="number" name="numero"></p>
        
        <label for="contrasena">Contraseña: </label>
        <p><input type="password" name="contrasena"></p>

        <label for="continente">Continente: </label>
        <p>
            <label for="America">America</label><input type="radio" name="continente" value="America">
            <label for="Europa">Europa</label><input type="radio" name="continente" value="Europa">    
            <label for="Asia">Asia</label><input type="radio" name="continente" value="Asia">
            <label for="Aftica">Africa</label><input type="radio" name="continente" value="Africa">
        </p>
        <label for="web">Página web: </label>
        <p><input type="url" name="web"></p>

        <label for="texto">Texto: </label>
        <p><textarea name="" id="" cols="30" rows="10"></textarea></p>

        <label for="peliculas"> Películas: </label>
        <p>
            <select name="peliculas" id="">
                <option value="Spiderman">Spiderman</option>
                <option value="Batman">Batman</option>
                <option value="Spiderman2">Spiderman2</option>
        
            </select>
        </p>

        <input type="submit" value="Enviar">
    
    
    </form>
</body>
</html>

