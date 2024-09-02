<?php
include "../view/header.php";


// Almacena la diapositiva actual en una variable de PHP
$slide_actual = 1; // Por defecto, comienza en la primera diapositiva

if (isset($_SESSION['usuario'])) {
    $usuario = $_SESSION['usuario'];

    // Conectar a la base de datos
    $conexion = mysqli_connect("database", "root", "docker", "administrador");

    if ($conexion) {
        // Consulta para obtener la diapositiva actual
        $query = "SELECT slide_actual FROM usuarios WHERE usuario = '$usuario'";
        $result = mysqli_query($conexion, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $slide_actual = $row['slide_actual']; // Asigna la última diapositiva vista
        } else {
            $slide_actual = 1; // Si no se encuentra registro, empezar desde la primera diapositiva
        }

        // Cierra la conexión
        mysqli_close($conexion);
    } else {
        echo "Error de conexión a la base de datos.";
    }
} else {
    echo "No se ha iniciado sesión.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modulo</title>
</head>
<body style="padding-left: 0px !important; padding-right: 0px !important;">



<!-- content fluid -->
<div class="container-fluid" style="position: relative; height: 100vh;">
<!-- content slider -->
<div class="ctMd">
<!-- content module-->

<div class="contentModule">
    <!-- slider01 welcome -->
    <!--Inicio seccion de bienvenido-->
    <div class="container current">
        <div class="row">
            <!-- Columna izquierda - Blanco -->
            <div class="col-lg-6 col-md-12 top-slide-14 bg-blanco-bienvenida">
                <div class="padding-left-1">
                    <h1 class="dx2-v2">Te damos la bienvenida a nuestro equipo</h1>
                    <p class="bienvenida">Estamos encantados de darte la bienvenida a través de este módulo virtual, diseñado especialmente para guiarte como nuevo colaborador de nuestra empresa. Queremos facilitarte una hoja de ruta que te permita identificarte y moverte con confianza dentro de nuestra organización.</p>
                </div>
            </div>
            <div class="col-lg-6 bg-azul-bienvenida">
                <!-- Contenido a la izquierda -->
                <div class="col-lg-12 col-md-12">
                    <div class="videocontainer fcenter">
                        <video controls poster style="max-width:540px; height: 450px;" id='actividad_4'>
                            <source src="../assets/vidio/person.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Fin seccion bienvenido-->

    <!--Inicio Programa de Inducción y Reinducción-->
    <div class="container">
        <div class="row">
            <!-- Columna izquierda - Azul petróleo -->
            <div class="col-lg-6 col-md-12 top-slide-14 bg-induccion">
                <div class="padding-left-1">
                    <h1 class="dx2-v2">Programa de Inducción <br> y Reinducción</h1>
                    <br>
                    <p class="induccion">El programa de inducción y reinducción en SSTA, se realiza a todo el personal e incluye datos generales de la empresa, aspectos legales en seguridad, salud en el trabajo y ambiente, políticas de No alcohol, consumo de sustancias psicoactivas, políticas de seguridad en el trabajo y ambiente, Reglamento de Higiene y seguridad industrial, funciones del COPASST y funciones del Comité de CONVIVENCIA, Plan de preparación y respuesta ante emergencias, factores de riesgos y sus controles (incluidas actividades de alto riesgo, rutinarias y no rutinarias).</p>
                </div>
            </div>
            <!-- Columna derecha - Blanco -->
            <div class="col-lg-6 bg-reinduccion">
                <!-- Contenido a la izquierda -->
                <div class="col-lg-12 col-md-12">
                    <div class="padding-left-1">
                        <br>
                        <p class="reinducción">Aspectos e impactos ambientales, procedimientos seguros para el desarrollo de la tarea, derechos y deberes del sistema de riesgos laborales, entre otros. La reinducción se hace de manera periódica, una vez al año o cuando ocurra una modificación en la vinculación como: cambio de sitio de trabajo, cambio de cargo, cambio en los procesos o cuando no se evidencia conocimiento de los aspectos básicos del SG-SSTA.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Fin de Programa de Inducción y Reinducción-->

    <!--Pantalla estructura tematica-->
    <div class="container estructura-tematica">
        <div class="row">
            <!-- Columna izquierda - Azul petróleo -->
            <div class="col-lg-12 col-md-12">
                <h1 class="text-center top-movil" style="color: var(--white)">Estructura <span style="color: var(--grey);"> temática</span></h1>
                <h4 style="color: var(--white);" class="mb-5 text-center">En este curso encontrarás estos <span style="color: var(--grey);">3 secciones</span> claves de acercamiento a nuestra organización, <br />continúa adelante para irlos revisando en el mismo orden.</h4>
            </div>
            
            <!-- Columna derecha - azul oscuro -->
            <div class="col-lg-12 col-md-12">
                <div class="contenido-central-2">
                    <div class="col-lg-12 col-md-12 slide-2-elementos">
                        <div class="col-lg-3 col-md-12">
                            <img class="img-estructura" src="../assets/imagenes/Sección 1.png">
                        </div>
                        <div class="col-lg-1 col-md-12">
                            <img class="img-estructura2" src="../assets/imagenes/flecha.png">
                        </div>
                        <div class="col-lg-3 col-md-12">
                            <img class="img-estructura" src="../assets/imagenes/Sección 2.png">
                        </div>
                        <div class="col-lg-1 col-md-12">
                            <img class="img-estructura2" src="../assets/imagenes/flecha.png">
                        </div>
                        <div class="col-lg-3 col-md-12">
                            <img class="img-estructura" src="../assets/imagenes/Sección 3.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Fin estructura temática-->

<?php
include "../view/seccion1.php";
?>

<!--end contentmodule -->
</div>
<!-- end content slider -->
    
<div>
        <button id="prev" class="bntNextPrev" onclick="changeSlide(-1)" style="display: none;">
            <i class="fas fa-angle-left"></i>
        </button>
        <button id="next" class="bntNextPrev" onclick="changeSlide(1)">
            <i class="fas fa-angle-right"></i>
        </button>
    </div>
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


<!-- Logic for slides and progress -->
<script>
    let currentSlide = <?= $slide_actual; ?>; // Iniciar desde la última diapositiva vista
const totalSlides = document.querySelectorAll(".contentModule > div").length;

function updateHeaderProgress() {
    if (typeof window.updateProgressBar === 'function') {
        window.updateProgressBar(currentSlide, totalSlides);
    }
}

function changeSlide(step) {
    currentSlide += step;
    currentSlide = Math.max(1, Math.min(currentSlide, totalSlides)); // Asegura que esté dentro de los límites

    // Lógica para cambiar la diapositiva
    // Aquí debes implementar la lógica para mostrar y ocultar las diapositivas según `currentSlide`
    
    updateHeaderProgress();

    // Enviar la diapositiva actual al servidor
    saveCurrentSlide(currentSlide);
}

function saveCurrentSlide(slide) {
    $.ajax({
        url: '../view/save_slide.php',
        type: 'POST',
        data: { slide_actual: slide },
        success: function(response) {
            console.log("Progreso guardado: " + response);
        },
        error: function(error) {
            console.error("Error al guardar el progreso: ", error);
        }
    });
}

// Inicializar el progreso del header
updateHeaderProgress();

</script>

</body>
</html>
