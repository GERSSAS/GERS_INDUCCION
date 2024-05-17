
<!DOCTYPE html>
<html lang="es">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- library bootstrap v.5.0.2 -->

	<link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap-reboot.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/cards.css">
	<link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap-utilities.css">
	<script src="../assets/bootstrap/js/bootstrap.bundle.js"></script>
	<script src="../assets/bootstrap/js/bootstrap.esm.js"></script>
	<script src="../assets/bootstrap/js/bootstrap.js"></script>
	<script src="../assets/js/jquery-3.3.1.js"></script>
	<script src="../assets/js/jquery-ui.min.js"></script>

	<script src="../assets/js/touch-dnd.js"></script>
	<!-- library cascading style sheets -->
	<link rel="stylesheet" type="text/css" href="../assets/css/all.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/styleSlider.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/actividades.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Alata">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700">

    <!--Libreria iconos-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">

    <!-- Para mapa -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />

    <!-- Para Tooltip -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

	<link rel="stylesheet" href="../assets/js/jplayer/lib/circle-player/skin/circle.player.css">
    <script type="text/javascript" src="../assets/js/jplayer/lib/jquery.min.js"></script>
    <script type="text/javascript" src="../assets/js/jplayer/dist/jplayer/jquery.jplayer.min.js"></script>
    <script type="text/javascript" src="../assets/js/jplayer/lib/circle-player/js/jquery.transform2d.js"></script>
    <script type="text/javascript" src="../assets/js/jplayer/lib/circle-player/js/jquery.grab.js"></script>
    <script type="text/javascript" src="../assets/js/jplayer/lib/circle-player/js/mod.csstransforms.min.js"></script>
    <script type="text/javascript" src="../assets/js/jplayer/lib/circle-player/js/circle.player.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    

    <link rel="stylesheet" href="../assets/js/magnify/css/magnify.css" />

    <!-- SIGNATURE PADS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/signature_pad/1.5.3/signature_pad.min.js"></script>


</head>
<body style="padding-left: 0px !important; padding-right: 0px !important;">
    <!-- Header con el logo -->
    <div class="header">
       <!-- header -->
	<div class="contentHeader">
		<div>
			<img class="logoTop" src="../assets/imagenes/GERS-I.png">
			<div><p style="text-align: left; color: white;" id="breadcrumb" ></p></div>
			<!-- button home -->
			<div>
				<button id="home" onclick="progCircle(1);">
					<i class="fas fa-home"></i>
				</button>
			</div>
			<!-- progress counter -->
			<div class="txPg">
				<span id="textProg">1</span> / <span id="nSlider"></span>
			</div>
			<i class="fas fa-bars" style="padding: 10px 10px 10px 20px;"></i>
            <img class="app" src="../assets/imagenes/img-appgers.png">
		</div>
		<!--menu-->
		<div class="headerOpc">
    		<i class="fas fa-times"></i>
			<br>
			<h1>Hola! <b><?= isset($CI) ? ucwords($CI->session->userdata('employee_data')['fullname']) : "Nombre de Usuario"; ?></b></h1>
			<h5>Bienvenido a tu Ruta de Aprendizaje!</h5>
			<div class="headerProg">
				<p><b>Progreso: </b><span id="course-progress"><strong><?= isset($progress[0]['course_progress']) ? $progress[0]['course_progress'] . "%" : "0%"; ?></span></strong></p>
			</div>
			<hr>
			<ul>
				<li><a href="index.php"> <i class="fas fa-caret-right"></i> Presentación</a></li>
				<li><a href="modulo.php<?= isset($course_code) ? '?course_code=' . $course_code : ''; ?>" class="act"><i class="fas fa-caret-right"></i> Contenido</a></li>
				<li><a href="quiz.php<?= isset($course_code) ? '?course_code=' . $course_code : ''; ?>"><i class="fas fa-caret-right"></i> Evaluación</a></li>
			</ul>
			<hr>
			<ul>
				<li><a href="../../../../courses/login.php"> <i class="fas fa-caret-right"></i> Mis cursos</a></li>
				<li><a href="../../../../courses/logout.php"> <i class="fas fa-caret-right"></i> Cerrar sesión</a></li>
			</ul>
			<span class="infSof">© Sofactia. powered by Unydos</span>
		</div>

	</div>
    </div>
</body>
</html>