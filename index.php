<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8" />

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

		<title>2o Congreso ITSC</title>
		<meta name="description" content="" />
		<meta name="author" content="Eder" />

		<meta name="viewport" content="width=device-width; initial-scale=1.0" />

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico" />
		<link rel="apple-touch-icon" href="/apple-touch-icon.png" />
		
		<!-- Agregamos los estilos de bootstrap -->
		<!—[if lt IE 9]>
	      <script src="js/html5.js"></script>
	    <![endif]—>
	    <link href="css/bootstrap.min.css" rel="stylesheet">
	    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
	</head>
<body>
<?php
    include 'menu.php';
?>

<div class="container">
	<div class="row">
		<div class="span12">
		<div class="row">
			<div class="span5">
				<h3>Bienvenido</h3>
				<p class="text-justify">El <strong>INSTITUTO TECNOLÓGICO SUPERIOR DE CINTALAPA</strong> con el objetivo de ofrecer un punto de encuentro para los profesionales 
					e investigadores científico-tecnológicos en Ingeniería Industrial, Ingeniería en Informática, Ingeniería en Desarrollo 
					Comunitario, Ingeniería en Industrias Alimentarias e Ingeniería en Energías Renovables,  que sirva para difundir y discutir 
	los últimos avances en el campo de las ingenierías y con el propósito de difundir y fortalecer las líneas de investigación institucionales, 
	de los cuerpos colegiados, de profesores e investigadores, así como los trabajos de investigación de los estudiantes</p>
				<hr>
			</div>
			<div class="span7">
				<?php include 'slider.html'; ?>
			</div>
		</div>
		</div>
	</div>
	      
	<div class="span12">
			<?php include 'footer.html'; ?>
	</div>
	
	<!--script>
	  var navigation = responsiveNav("#nav", {
	  	customToggle: "#toggle",
	  	openPos:"relative",
	  	animate:true});
	</script-->
	<script src="js/jquery-1.10.1.js"></script>
	<script src="js/bootstrap.min.js"></script>
</div>
</body>
</html>