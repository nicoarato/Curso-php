<?php
require_once 'ModeloBase.php';

class Usuario extends ModeloBase{
    public $nombre;
    public $apellido;
    public $email;
    public $password;

    public function __construct(){
        parent::__construct(); //acceso a db para consultas
    }



    public function setNombre($nombre){
        $this->nombre=$nombre;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setApellido($apellido){
        $this->apellido=$apellido;
    }

    public function getApellido(){
        return $this->apellido;
    }

    public function setEmail($email){
        $this->email=$email;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setPassword($password){
        $this->password=$password;
    }

    public function getPassword(){
        return $this->password;
    }


}