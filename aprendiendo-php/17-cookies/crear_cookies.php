<?php

/*cookie es un fichero que se almacena en la pc del usuario 
que visita la web con el fin de recordar datos o rastrear
cierta informacion o comportamiento del mismo en la web*/

//Crear cookies

//setcookie("nombrecoockie", "valor que puede ser texto",caducidad,ruta,dominio);


//cookie basica
setcookie("micookie","valor de mi galleta");

//cookie con expiracion

setcookie("unyear","valor de mi cookie de 365 dias",time()+(60*60*24*365));

//

?>

<a href="ver_cookies.php">Ver cookies</a>