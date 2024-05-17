<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modulo</title>
</head>
<body style="padding-left: 0px !important; padding-right: 0px !important;">

<?php
include "../view/header.php";
?>

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
            <div class="col-lg-6 col-md-12 top-slide-14 bg-blanco-bienvenida" >
                <div class="padding-left-1 ">
                    <h1 class="dx2-v2" >Te damos la bienvenida a nuestro equipo</h1>   
                    <p class="bienvenida">Estamos encantados de darte la bienvenida
                        a través de este módulo virtual, diseñado especialmente para guiarte como nuevo colaborador de nuestra empresa. Queremos
                        facilitarte una hoja de ruta que te permita
                        identificarte y moverte con confianza dentro de nuestra organización</p>
                </div>
            </div>
            <div class="col-lg-6 bg-azul-bienvenida" >
                <!-- Contenido a la izquierda -->
                <div class="col-lg-12 col-md-12">
                    <div class="videocontainer fcenter">
                        <video controls poster style="max-width:540px; height: 450px;" id='actividad_4' >
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
            <div class="col-lg-6 col-md-12 top-slide-14 bg-induccion" >
                <div class="padding-left-1 ">
                    <h1 class="dx2-v2">Programa de Inducción 
                        <br> y Reinducción</h1>
                    <br>   
                    <p class="induccion" >El programa de inducción y reinducción en SSTA, se realiza a todo el personal e
                        incluye datos generales de la empresa, aspectos legales en seguridad, salud en el
                        trabajo y ambiente, políticas de No alcohol, consumo de sustancias psicoactivas,
                        políticas de seguridad en el trabajo y ambiente, Reglamento de Higiene y seguridad
                        industrial, funciones del COPASST y funciones del Comité de CONVIVENCIA, Plan de
                        preparación y respuesta ante emergencias, factores de riesgos y sus controles
                        (incluidas actividades de alto riesgo, rutinarias y no rutinarias),</p>
                </div>
            </div>
            <!-- Columna derecha - Blanco -->
            <div class="col-lg-6 bg-reinduccion" >
                    <!-- Contenido a la izquierda -->
                <div class="col-lg-12 col-md-12">
                    <div class="padding-left-1 ">
                        <br>   
                        <p class="reinducción">aspectos e impactos
                            ambientales, procedimientos seguros para el desarrollo de la tarea, derechos y
                            deberes del sistema de riesgos laborales, entre otros.
                            La reinducción se hace de manera periódica, una vez al año o cuando ocurra una
                            modificación en la vinculación como: cambio de sitio de trabajo, cambio de cargo,
                            cambio en los procesos o cuando no se evidencia conocimiento de los aspectos
                            básicos del SG-SSTA</p>
                    </div>
                </div>       
            </div>
        </div>
    </div>
    <!--Fin de Programa de Inducción y Reinducción-->

    <!--Pantalla estructura tematica-->
    <div class="container estructura-tematica">
        <div class="row ">
            <!-- Columna izquierda - Azul petróleo -->
            <div class="col-lg-12 col-md-12">
                <h1 class="text-center top-movil" style="color: var(--white)">Estructura <span style="color: var(--grey);"> temática</span></h1>
                <h4 style="color: var(--white);" class="mb-5 text-center">En este curso encontrarás estos <span style="color: var(--grey);">3 secciones</span> claves de acercamiento
                    a nuestra organización, <br />continúa adelante para irlos revisando en el mismo orden</h4>
            </div>
            
            <!-- Columna derecha - azul oscuro -->
            <div class="col-lg-12 col-md-12 ">
                <div class="contenido-central-2">
                    <div class="col-lg-12 col-md-12 slide-2-elementos" >
                        <div class="col-lg-3 col-md-12">
                            <img  class="img-estructura"  src="../assets/imagenes/Sección 1.png">
                        </div>
                        <div class="col-lg-1 col-md-12">
                            <img  class="img-estructura2"  src="../assets/imagenes/flecha.png">
                        </div>
                        <div class="col-lg-3  col-md-12">
                            <img  class="img-estructura"  src="../assets/imagenes/Sección 2.png">
                        </div>
                        <div class="col-lg-1 col-md-12">
                            <img  class="img-estructura2"  src="../assets/imagenes/flecha.png">
                        </div>
                        <div class="col-lg-3  col-md-12">
                            <img class="img-estructura" src="../assets/imagenes/Sección 3.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Fin estrucuta tematica-->

<?php
include "../view/seccion1.php";
?>


<!--end contentmodule -->
</div>
<!-- end  content slider -->
    
    <div>
        <!-- button next & prev -->
        <button id="pagIndex" class="bntNextPrev" onclick="btnPrev()" style="left: 10px;">
        <i class="fas fa-angle-left"></i>
        </button>
        <!-- button next & prev -->
        <button id="prev" class="bntNextPrev" style="display: none;">
            <i class="fas fa-angle-left"></i>
        </button>
        <!-- button next & prev -->
        <button id="next" class="bntNextPrev">
            <i class="fas fa-angle-right"></i>
        </button>
    </div>
</div>
<!-- end content fluid -->   



</div>
      <!-- library javascript -->
      <script src="../assets/js/sessvars.js"> </script>
        <script src="../assets/js/touch-dnd.js"></script>
        <script src="../assets/js/script.js"></script>
        <script type="text/javascript" src="../assets/js/magnify/js/jquery.magnify.js"></script>
        <script src="../assets/js/interactividad.js"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>
        <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
       
      <!----> 
      <script>
    aniSl19(1);
    
    function aniSl19(e){
        var sliders = $(".contentModule > div").length;
        $('#nSlider').text(sliders - 1);
        
        if (e === 1) {
            $("#prev").css('display','none');
            $("#pagIndex").css('display','inline-block');
        } else {
            $("#pagIndex").css('display','none');
        }
        
        if (e === 2) {
            $("#pagIndex").css('display','none');
            $("#next-btn").on('click', function() {
                $("#next").click(); 
            });
        }
    
        if (e === sliders) {
            $("#next").css('display','none');
            window.location.href = "quiz.php";
        }
    }
    
    function btnPrev(){
        window.location.href = "index.php";
    };
</script>

  
</body>
</html>

