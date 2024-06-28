<?php

$host = "database";
$user = "root";
$pass = "docker";
$namedb = "administrador"; 

$conectar = mysqli_connect($host, $user, $pass, $namedb) or die("Error de conexion");

// echo "Conectado";

?>