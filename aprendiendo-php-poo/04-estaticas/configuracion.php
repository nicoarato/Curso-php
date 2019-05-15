<?php
//static: para llamarlo no necesito instanciar un objeto



class Configuracion{

    public static $color;
    public static $newsletter;
    public static $entorno;

    public function getColor(){
        return self::$color;
    }


    public function getNewsletter(){
        return self::$newsletter;
    }

    public function getEntorno(){
        return self::$entorno;
    }


    public function setColor($color){
         self::$color=$color;
    }


    public function setNewsletter($newsletter){
         self::$newsletter=$newsletter;
    }

    public function setEntorno($entorno){
         self::$entorno=$entorno;
    }

}