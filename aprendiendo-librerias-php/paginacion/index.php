<?php
require '../vendor/autoload.php';

//conexion a la base de datos
$conexion = new mysqli("localhost","root","","notas_master");
$conexion->query("SET NAMES 'utf8'");


//consulta para contar los elementos a paginar
/* $consulta = $conexion->query("SELECT * FROM notas");
$numero_elementos = $consulta->num_rows;
 */
$consulta = $conexion->query("SELECT COUNT(id) as 'total' FROM notas");

$numero_elementos = $consulta->fetch_object()->total;
//var_dump($numero_elementos);
$numero_elementos_pagina = 2;


//Hacer paginacion
$pagination = new Zebra_Pagination();
//numero total de elementos a paginar
$pagination->records($numero_elementos);
//numero elementos por pagina
$pagination->records_per_page($numero_elementos_pagina);
$page = $pagination->get_page(); 

$inicio = ($page-1)*$numero_elementos_pagina;
$sql="SELECT * FROM notas LIMIT $inicio,$numero_elementos_pagina;";

$notas = $conexion->query($sql);

echo '<link rel="stylesheet" href= "../vendor/stefangabos/zebra_pagination/public/css/zebra_pagination.css" type="text/css">';
while($nota = $notas->fetch_object()){
    echo "<h1>{$nota->titulo}</h1>";
    echo "<h3>{$nota->descripcion}</h3>";
    echo "<hr>";
}

$pagination->render();

