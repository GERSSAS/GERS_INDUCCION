<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: ../includes/sesion/login.php");
    exit;
}

// Verificar el tiempo de inactividad (30 minutos)
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity'] > 1800)) {
    session_unset();
    session_destroy();
    header("Location: ../includes/sesion/login.php");
    exit;
}

// Actualizar el tiempo de última actividad
$_SESSION['last_activity'] = time();

// Verificar el rol del usuario para el acceso a páginas específicas
$current_page = basename($_SERVER['PHP_SELF']);
$allowed_pages = [
    1 => ['usuarios.php'], // Master
    2 => ['useradmin.php'], // Administrador
    3 => ['index.php'] // Usuario normal
];


?>