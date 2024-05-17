<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!--library cascading style sheets-->
  <link rel="stylesheet" type="text/css" href="../assets/css/all.css" />
  <!--library javascript-->
  <script src="../assets/js/jquery-3.3.1.js"></script>
</head>
	<style>
		* {
			margin: 0;
			padding: 0;
		}
		body {
			position: relative;
			width: 100%;
			height: 100vh;
		}
		video {
			position: fixed;
			width: 100%;
			height: 100%;
			background: #333;
		  object-fit: cover;
		}
		.contInd {
			position: absolute;
	    width: 90%;
	    z-index: 2;
	    max-width: 600px;
	    top: 15%;
	    left: 10%;
		}
		img {
	    position: relative;
	    max-width: 400px;
	    width: 100%;
	    margin-bottom: 20px;
		margin-left: -3%;
		}
		.titulo {
	    font-size: 2.50rem;
		line-height: 3em;
		margin-left: -3%;
	    color: #133450;
		font-weight: bold;
		font-family: 'Times New Roman', Times, serif;
		}
		button {
			position: absolute;
			z-index: 2;
			max-width: 120px;
			height: 40px;
			left: -57%;
			right: -1px;
			margin: 0 auto;
			bottom: 33%;
			color: #ffffff !important;
			background: #133450;
			padding: 5px 26px;
			border-radius: 40px;
			border: none;
			font-size: 18px;
			box-shadow: rgb(0 160 175 / 30%) 0px 8px 24px;
		}
		button:hover {
			cursor: pointer;
			filter: grayscale(50%);
		}
		.slider12 > div:nth-child(4) > i:hover {
			filter: grayscale(50%);
			transform: scale(1.01);
		}
		@-webkit-keyframes bell {
	    0% {
        box-shadow: 0 0 0 0 rgba(0 160 175 / 0.8);
	    }
	    100% {
        box-shadow: 0 0 0 50px rgba(0 160 175 / 0);
	    }
		}
		
		.fd {
			position: absolute;
			width: 100%;
			height: 100vh;
			background-image: url(../assets/imagenes/img3.png);
			background-size: cover;
    		background-position: center;
			z-index: 1;
			
		}
		
		.contInd {
			position: absolute;
			width: 90%;
			z-index: 2;
			max-width: 600px;
			top: 15%;
			left: 10%;
		}
		@media (max-width: 768px) {
			.fd {
				position: absolute;
				width: 100%;
				height: 100vh;
				background-image: url(assets/imagenes/img3.png);
				background-size: cover;
				background-position: center;
				z-index: 1;
			}
			.contInd {
				position: absolute;
				width: 90%;
				z-index: 2;
				max-width: 600px;
				top: 10px;
				left: 10%;
				text-align: center;
			}
			.movil {
				bottom: 45% !important;
			}
		}
		@media (max-width: 1024px) {
	    .contInd {
	    	left: 0;
		    right: 0;
		    margin: 0 auto;
	    }
		}
	</style>
</head>
<body>
	<div>
		<div class="contInd">
			<img src="../assets/imagenes/image.png" style="margin-top: 5%;">
			<p class="titulo">Inducción Corporativa</p>
		</div>
		<div class="fd"></div>
		<button class="btn movil" id="btnIniciar">INICIAR</button>
  </div>
  
  <script>
    $(document).ready(function(){
      $("#btnIniciar").on("click", function(){
        window.location.href = "modulo.php";
      });
    });
  </script>

</body>
</html>