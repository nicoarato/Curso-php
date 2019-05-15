<?php

class Usuario{
    
    const URL_COMPLETA = "http://localhost";
    public $email;
    public $password;

    public function getEmail(){
        return $this->email;
    }

    public function getPassword(){
        return $this->$password;
    }



}

echo Usuario::URL_COMPLETA; //por ser una constante a nivel de clase

$usuario = new Usuario();
//echo $usuario->URL_COMPLETA; //error
echo $usuario::URL_COMPLETA; //accede correctamente
var_dump($usuario); 