<?php

//contrato de metodos debe tener la clase.
//defino que metodos debe tener mi clase.
interface Ordenador{
    public function encender();
    public function apagar();
    public function reiniciar();
    public function desfragmentar();
    public function detectarUsb();
}

class iMac implements Ordenador{
    public $modelo;
    
    public function getModelo(){
        return $this->modelo;
    }

    public function setModelo($modelo){
        $this->modelo= $modelo;
    }

    public function encender(){}
    public function apagar(){}
    public function reiniciar(){}
    public function desfragmentar(){}
    public function detectarUsb(){}

}

$macPro = new iMac();
$macPro->setModelo("A1 2019");
echo $macPro->getModelo();
var_dump($macPro);