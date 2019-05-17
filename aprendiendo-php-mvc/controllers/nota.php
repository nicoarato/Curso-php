<?php

class NotaController{
    public function listar(){
        //Modelo
        require_once 'models/nota.php';
        
        //Logica controller
        $nota=new Nota();
        $nota->setNombre("Holaaa");
        $nota->setContenido("Hola Mundo PHP MVC");

        //Vista
        require_once 'views/nota/listar.php';
    }
    public function crear(){
        echo "Funcion Crear";
    }

    public function borrar(){

    }

    



}