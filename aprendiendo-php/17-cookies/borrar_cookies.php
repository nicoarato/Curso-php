<?php
   
   if(isset($_COOKIE['micookie'])){
        unset($_COOKIE['micookie']);
        setcookie('micookie','',time()-100); //ademas se debe caducar la cookie
        echo "cokie borrada";
    }

    header('Location:ver_cookies.php'); //redirecciones
?>