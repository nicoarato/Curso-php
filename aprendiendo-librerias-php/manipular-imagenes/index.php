<?php
require_once '../vendor/autoload.php';

$img_original = 'imagenes/hero.jpg';

$img_new = 'imagenes/imagen2.jpg';

$thumb = new PHPThumb\GD($img_original);

//redimensionar
//$thumb->resize(250,250);

//recortar
//$thumb->crop(50,50,120,120);


$thumb->cropFromCenter(250,100);

$thumb->show();
$thumb->save($img_new);