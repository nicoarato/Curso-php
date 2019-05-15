<?php

class Usuario{
    public $nombre;
    public $email;

    public function __construct($nombre,$email){
        $this->nombre= $nombre;
        $this->email= $email;
        echo "Objeto creado";
    }

    public function __destruct(){
        echo "<br>objeto destruido.";
    }
//--------------------------------------------
//  Se utiliza por si quiere imprimir un objeto.
//  Evita un error. Se puede utilizar una funcion 
    public function __toString(){
        return "Hola: , {$this->nombre}, estas registrado con : {$this->email}";
    }
//---------------------------------------------
    public function getNombre(){
        return $this->nombre;
    }

    public function getEmail(){
        return $this->email;
    }
}

$user = new Usuario("carlos","carlos.com");

for($i=0;$i<10;$i++){
    echo "<p>".$i."</p>";
}

echo $user;