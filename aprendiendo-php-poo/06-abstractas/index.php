<?php

abstract class Ordenador{// no habrá instancias Ordenador.

    public $encendido;
    
    abstract public function encender(); //sólo se declara


    public function apagar(){
        $this->encendido = false;
    }
}

class PcAsus extends Ordenador{
    public $software;
    
    public function encender(){ //se debe definir obligatoriamente aqui
        $this->encendido=true;
    }

    public function arrancarSoftware(){
        $this->software = true;
    }


    public function apagarSoftware(){
        $this->software = false;
    }
}


$ordenador = new PcAsus();

$ordenador->arrancarSoftware();
$ordenador->encender();

var_dump($ordenador);

$ordenador->apagar();

var_dump($ordenador);