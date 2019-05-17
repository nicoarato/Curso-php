<?php

class NotaController{
    public function listar(){
        //Modelo
        require_once 'models/nota.php';
        
        //Logica controller
        $nota=new Nota();
     
        $notas= $nota->conseguirTodos('notas'); //hereda y le paso la tabla



        //Vista
        require_once 'views/nota/listar.php';
    }
    public function crear(){
        //cargar el modelo
        require_once 'models/nota.php';

        $nota = new Nota();
        $nota->setUsuario_id(1);
        $nota->setTitulo("Nota desde PHP MVC");
        $nota->setDescripcion("Descripción de mi nota");
        $guardar= $nota->guardar();
        

        header("Location: index.php?controller=Nota&action=listar");
    }

    public function borrar(){

    }

    



}