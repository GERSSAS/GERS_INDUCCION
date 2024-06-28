<?php

$host = "database";
$user = "root";
$pass = "docker";
$namedb = "administrador"; 


$conexion = mysqli_connect($host, $user, $pass, $namedb);
if(!$conexion){
echo "No se realizo la conexion a la basa de datos, el error fue:".
mysqli_connect_error() ;


}
