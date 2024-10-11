<?php
include "../view/header.php";

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$valor_minimo_progreso = 100; // Porcentaje mínimo para pasar la evaluación
$slide_actual = 1; // Por defecto, comienza en la primera diapositiva

if (isset($_SESSION['usuario'])) {
    $usuario = $_SESSION['usuario'];

    // Conectar a la base de datos
    $conexion = mysqli_connect("database", "root", "docker", "administrador");

    if ($conexion) {
        // Consulta para obtener la diapositiva actual del usuario
        $query = "SELECT slide_actual, quiz_terminado FROM usuarios WHERE usuario = '$usuario'";
        $result = mysqli_query($conexion, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $slide_actual = $row['slide_actual']; // Asigna la última diapositiva vista
            $quiz_terminado = $row['quiz_terminado']; // Verifica si el quiz ya fue terminado
        }

        // Calcular el progreso en porcentaje
        $total_slides = 100; // Reemplaza con el número total de diapositivas
        $progress = [
            'course_progress' => ($slide_actual / $total_slides) * 100
        ];

        // Si el progreso es del 100% y el quiz no está marcado como terminado
        if (!empty($progress['course_progress']) && $progress['course_progress'] >= $valor_minimo_progreso && $quiz_terminado == 0) {
            // Marcar como terminado el quiz
            $query_terminado = "UPDATE usuarios SET quiz_terminado = 1 WHERE usuario = '$usuario'";
            mysqli_query($conexion, $query_terminado);

            // Insertar notificación en la base de datos
            $mensaje = "El usuario con nombre $usuario ha finalizado el quiz.";
            $query_notificacion = "INSERT INTO notificaciones (id_usuario, mensaje) 
                                   VALUES ((SELECT id FROM usuarios WHERE usuario = '$usuario'), '$mensaje')";
            mysqli_query($conexion, $query_notificacion);
        }

        // Cierra la conexión
        mysqli_close($conexion);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
</head>
<body style="padding-left: 0px !important; padding-right: 0px !important;">
<!-- content fluid -->
<div class="container-fluid" style="position: relative; height: 100vh;">
    <div class="ctMd">
        <div class="contentModule">
            <div class="container dividerBg current">
                <div class="row mx-auto" style="background-color: #003150; width: 100%; height: 100%;">
                <div class="col-lg-6 col-md-12 left">
                        <?php
                        if (!empty($progress['course_progress']) && $progress['course_progress'] >= $valor_minimo_progreso) {
                        ?>
                            <h1>QUE APRENDIMOS</h1>
                            <h6 style="color: #fff;">Por favor haz clic en el botón para comenzar la <br> evaluación del módulo. </h6>
                            <a href="../view/quiz2.php">
                                <button class="btn mt-3s">Iniciar</button>
                            </a>
                        <?php } else { ?>
                            <h1>RECUERDA</h1>
                            <h6 style="color: #fff;">Debes superar el <?= $valor_minimo_progreso; ?>% de la valoración <br> para aprobar el módulo. </h6>
                        <?php } ?>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <img src="../assets/imagenes/8136206-2.png" style="width: 100%; margin-left: -11%; margin-top: 8%;" >
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
<!-- library javascript -->
<script src="../assets/js/sessvars.js"></script>
<script src="../assets/js/touch-dnd.js"></script>
<script src="../assets/js/script.js"></script>
<script type="text/javascript" src="../assets/js/magnify/js/jquery.magnify.js"></script>
<script src="../assets/js/interactividad.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

</body>
</html>