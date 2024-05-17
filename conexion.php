<?php

$host = "database";
$user = "root";
$pass = "docker";
$namedb = "komorebi1"; 

$conectar = mysqli_connect($host, $user, $pass, $namedb) or die("Error de conexion");

// echo "Conectado";

