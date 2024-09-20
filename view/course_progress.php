<?php
// Ejemplo de cómo podrías obtener el progreso del curso desde la base de datos
$usuario_id = $_SESSION['usuario_id']; // Asumiendo que tienes el ID del usuario en la sesión

// Conexión a la base de datos
$conexion = new mysqli('database', 'root', 'docker', 'administrador');

// Consulta para obtener el progreso del curso
$query = "SELECT course_progress FROM progreso_curso WHERE usuario_id = ?";
$stmt = $conexion->prepare($query);
$stmt->bind_param("i", $usuario_id);
$stmt->execute();
$result = $stmt->get_result();
$progress = $result->fetch_assoc();

$valor_minimo_progreso = 70; // Por ejemplo, 70% como valor mínimo requerido
?>
