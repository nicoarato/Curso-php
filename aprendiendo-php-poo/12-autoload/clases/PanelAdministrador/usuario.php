<?php

namespace PanelAdministrador;

class Usuario{
    public $nombre;
    public $email;
    public $sistema;

    public function __construct($nombre,$email,$sistema){
        $this->nombre=$nombre;
        $this->email=$email;
        $this->sistema=$sistema;
    }

    

}