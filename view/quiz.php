
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--library bootstrap v.5.0.2-->
	<link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap-reboot.css">
	<link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap-utilities.css">
	<script src="../assets/bootstrap/js/bootstrap.bundle.js"></script>
	<script src="../assets/bootstrap/js/bootstrap.esm.js"></script>
	<script src="../assets/bootstrap/js/bootstrap.js"></script>
	<!--library cascading style sheets-->
	<link rel="stylesheet" type="text/css" href="../assets/css/all.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/styleSlider.css">
</head>
<body class="darkStyle">
	<!--header-->
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
			<!-- <h1>Hola! <b><?= ucwords($CI->session->userdata('employee_data')['fullname']); ?></b></h1> -->
			<h1>Hola! <b>Nombre user</b></h1>
			<h5>Bienvenido a su Ruta de Aprendizaje!</h5>
			<div class="headerProg">
			    <p><b>Progreso: </b><span id="course-progress"><strong>
				<?= $progress[0]['course_progress'];?>%</span></strong></p>
			</div>
			<hr>
			<ul>
				<a href="index.html">
				<!-- <a href="index.php?course_code=<?= $course_code; ?>"> -->
					<li><i class="fas fa-caret-right"></i> Presentación</li>
				</a>
				<a href="modulo.html" class="act">
				<!-- <a href="modulo.php?course_code=<?= $course_code; ?>" class="act"> -->
					<li><i class="fas fa-caret-right"></i> Contenido</li>
				</a>
				<a href="quiz.html">
				<!-- <a href="quiz.php?course_code=<?= $course_code; ?>"> -->
					<li><i class="fas fa-caret-right"></i> Evaluación</li>
				</a>
			</ul>
			<hr>
			<ul>
				<a href="index.html">
				<!-- <a href="../../../../courses/login.php"> -->
					<li><i class="fas fa-caret-right"></i> Mis cursos</li>
				</a>
				<a href="modulo.html">
				<!-- <a href="../../../../courses/logout.php"> -->
					<li><i class="fas fa-caret-right"></i> Cerrar sesión</li>
				</a>
			</ul>
			<span class="infSof">© GERS SAS — Todos los derechos reservados.<br>
			Desde 1981 hasta el presente.</span>
		</div>
	</div>

	<div class="ctMd">
		<!--content-->
		<div class="contentModule">

			<!--slider01-->
			<div class="container dividerBg current">
				<div class="row mx-auto" style="max-width:1000px;">
					<div class="col-lg-6 col-md-12">
						<!-- <?php
							if(!empty($progress[0]['course_progress']) && $progress[0]['course_progress'] >=  $valor_minimo_progreso){
						?> -->
							<h1>QUE APRENDIMOS</h1>
							<h6 style="color: #fff;">Por favor haz clic en el botón para comenzar la evaluación del módulo. </h6>
							<a href="http://arismarmato.amatiacapacitacion.local/amatia/audit/1701283531/dUrBWC0palRMdwArTeZDUSisWvkE9lm2a08EzNmhbIXsf5SY9tkAxGK7fIY3GNb7" target="_blank" style="text-decoration: none;">
							<button class="btn mt-3s">Iniciar</button>
							</a>
						<!-- <?php } else { ?> -->
    							<h1>RECUERDA</h1>
    							<h6 style="color: #fff;">Debes superar el <?=$valor_minimo_progreso;?>% de la valoración para aprobar el módulo. </h6>
						<!-- <?php } ?> -->
					</div>
					<div class="col-lg-6 col-md-12">
						<img class="mx-auto" src="assets/img/quiz.png">
					</div>
				</div>
			</div>

		</div>
	</div>

	<!--button next & prev-->
	<button id="pagIndex" class="bntNextPrev" onclick="btnPrev()" style="left: 10px;">
    <i class="fas fa-angle-left"></i>
  </button>

  <!-- library javascript -->
	<script src="assets/js/jquery-3.3.1.js"></script>
	<script src="assets/js/trackingmanagern3.js"></script>
  <script src="assets/js/sessvars.js"> </script>
	<!-- <script src="assets/js/script.js"></script> -->
	<script src="assets/js/tracking.js"></script>
	<script>
		function btnPrev(){
      	window.location.href = "modulo.html";
		//window.location.href = "modulo.php?course_code=<?= $course_code; ?>";

    };

    //function bar menu
		$(".fa-bars").on("click", function(){
			$(".opMenu").toggle();
		});

		//function bar menu
		$(".fa-bars").on("click", function(){
			event.stopPropagation();
			$(".headerOpc").addClass('act');
		});
		$('html, .fa-times').click(function() {
		  $(".headerOpc").removeClass('act');
		});
		$('.headerOpc').click(function() {
			event.stopPropagation();
		});
	</script>

</body>
</html>