<?php

/*conexion*/

/*mysql_connect($server, $username, $password, $database);*/

$servidor = 'localhost';
$username = 'root';
$password = '';
$database = 'blog_master';

$db = mysqli_connect($servidor, $username, $password, $database);

mysqli_query($db, "SET NAMES 'utf8'");



?>