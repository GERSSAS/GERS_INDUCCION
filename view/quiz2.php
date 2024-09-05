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
        $query = "SELECT slide_actual FROM usuarios WHERE usuario = '$usuario'";
        $result = mysqli_query($conexion, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $slide_actual = $row['slide_actual']; // Asigna la última diapositiva vista
        }

        // Calcular el progreso en porcentaje
        $total_slides = 100; // Reemplaza con el número total de diapositivas
        $progress = [
            'course_progress' => ($slide_actual / $total_slides) * 100
        ];

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
    <!--Pantalla estructura tematica-->
    <div class="container quiz2">
        <div class="row">
            <!-- Columna izquierda - Azul petróleo -->
            <div class="col-lg-12 col-md-12">
                <h1 class="text-center top-movil" style="color: var(--white)">Evaluación <span style="color: var(--grey);"> Corporativa</span></h1>
            </div>
            
            <!-- Columna derecha - azul oscuro -->
            <div class="col-lg-12 col-md-12">
                <div class="contenido-central-2">
                    <div class="col-lg-12 col-md-12 slide-2-elementos">
                    <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSecomx-JNJiAcIz4YEMw6jK5xcsmTH0Qo9pJWofIipyo8YmZw/viewform?embedded=true" width="640" height="6516" frameborder="0" marginheight="0" marginwidth="0" style=" margin-top: -10%;
 margin-left: 29%;">Loading…</iframe> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Fin estructura temática-->



<!--end contentmodule -->
</div>
<!-- end content slider -->
    
</div>
</div>
<!-- end content fluid -->   

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
