<?php

    function validarEmail($email){
        $status = "No válido";
        if(!empty($email) && filter_var($email,FILTER_VALIDATE_EMAIL)){
            $status = "válido";
        }
        return $status;
    }

if(isset($_GET['email'])){
    echo validarEmail($_GET['email']);
}else{
    echo "Pasa por GET un email...";
}

?>