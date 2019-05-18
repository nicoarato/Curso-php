<?php
require '../vendor/autoload.php';

use  Spipu\Html2Pdf\Html2Pdf;
$html2pdf = new Html2Pdf();

/*
$html= '<h1>Hola mundo desde una libreria php</h1>';
$html .= "<p>Esto es una prueba de creación de pdf.</p>";
*/

//Recoger la vista a imprimir
ob_start();
require_once 'pdf_para_generar.php';
$html= ob_get_clean();

$html2pdf->writeHTML($html);
//$html2pdf->output();
$html2pdf->output('archivo.pdf');