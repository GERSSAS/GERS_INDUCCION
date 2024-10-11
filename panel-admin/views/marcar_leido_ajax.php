<?php
if (isset($_POST['id'])) {
    $conexion = mysqli_connect("database", "root", "docker", "administrador");
    
    $id = (int)$_POST['id'];
    
    // Marcar la notificación como leída
    $query = "UPDATE notificaciones SET leido = 1 WHERE id = $id";
    
    if (mysqli_query($conexion, $query)) {
        echo 'success';
    } else {
        echo 'error';
    }

    mysqli_close($conexion);
}
?>
