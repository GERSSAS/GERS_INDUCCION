<?php
session_start();

if (isset($_SESSION['usuario']) && isset($_POST['slide_actual'])) {
    $usuario = $_SESSION['usuario'];
    $slide_actual = (int) $_POST['slide_actual'];

    $conexion = mysqli_connect("database", "root", "docker", "administrador");

    if ($conexion) {
        $query = "UPDATE usuarios SET slide_actual = ? WHERE usuario = ?";
        $stmt = mysqli_prepare($conexion, $query);
        mysqli_stmt_bind_param($stmt, "is", $slide_actual, $usuario);
        
        if (mysqli_stmt_execute($stmt)) {
            echo json_encode(["success" => true, "message" => "Diapositiva actualizada correctamente."]);
        } else {
            echo json_encode(["success" => false, "message" => "Error al actualizar la diapositiva."]);
        }

        mysqli_stmt_close($stmt);
        mysqli_close($conexion);
    } else {
        echo json_encode(["success" => false, "message" => "Error de conexión a la base de datos."]);
    }
} else {
    echo json_encode(["success" => false, "message" => "Datos insuficientes."]);
}
?>