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
	<div class="span6 offset3" align="center">
		<h3>Comite Organizador del 2o Congreso Internacional de Ingenierias del ITSC</h3>
	</div>
	<div class="accordion span4 offset4" id="comite">
		<div class="accordion-group">
			<div class="accordion-heading">
				<a class="accordion-toggle btn btn-inverse" data-toggle="collapse" data-parent="#comite" href="#coordinacionGeneral" >
					Coordinacion General
				</a>
				</div>
				<div id="coordinacionGeneral" class="accordion-body collapse">
					<div class="accordion-inner">
						<ul>
						<li> Ing. Francisco Javier Ruiz Cruz</li>
						<li> Psic Alma Janet Reyes Zepeda</li>
						</ul>
					</div>
				</div>
			</div>
			
			<div class="accordion-group">
				<div class="accordion-heading">
					<a class="accordion-toggle btn" data-toggle="collapse" data-parent="#comite" href="#subCientifica" >
						Subcoordinación Científica 
					</a>	
				</div>
				<div id="subCientifica" class="accordion-body collapse">
					<div class="accordion-inner btn-inverse">
						<ul>
							<li> Anayancy Lam Gutiérrez</li>
							<li>Lidia Ríos Moguel</li>
							<li> Margarita Aguilar Alvarado</li>
							<li> Ervin Durantes Cueto</li>
							<li> Omar Hatziel Garza Pascacio</li>
							<li> Jose de Jesus Zavala Zavala</li>
							<li> Raciel Cigarroa Arreola</li>
							<li> Ernesto Solis Ramírez</li>
							<li> Héctor Daniel Vázquez Delgado</li>
							<li> Violesta Gpe. Clemente Arce</li>
							<li> Rocky David Mancilla</li>
						</ul>
					</div>
				</div>
			</div>
			
			<div class="accordion-group">
				<div class="accordion-heading">
					<a class="accordion-toggle btn" data-toggle="collapse" data-parent="#comite" href="#subAdministrativa">
						Subcoordinación administrativa
					</a>
				</div>
					<div id="subAdministrativa" class="accordion-body collapse">
						<div class="accordion-inner btn-inverse">
							<ul>
								<li>Gilberto Alejandro Gomez Toledo</li>
								<li>Pascualita Camacho García</li>
							</ul>
						</div>
					</div>
				</div>
			
			<div class="accordion-group">
				<div class="accordion-heading">
					<a class="accordion-toggle btn " data-toggle="collapse" data-parent"#comite" href="#subLogistica">
						Subcoordinación de logistica
					</a>
				</div>
					<div id="subLogistica" class="accordion-body collapse">
						<div class="accordion-inner btn-inverse">
							<ul>
								<li>Cesar Figueroa Chacón</li>
								<li>Luis Ernesto López Velázquez</li>
								<li>Sergio Hernandez Cervantes</li>
								<li>Benjamin Ayvar Ramos</li>
								<li>Salvador Cruz Cruz</li>
								<li>Paulina Diaz Pérez</li>
								<li>Reynol Roque Farrera</li>
								<li>Luis German Montesinos Alfaro</li>
								<li>Luis Andres Rios Lara</li>
							</ul>
						</div>
					</div>
				</div>
			
			<div class="accordion-group">
				<div class="accordion-heading">
					<a class="accordion-toggle btn" data-toggle="collapse" data-parent"#comite" href="#subPublicidad">
						Subcoordinacion de Publicidad
					</a>
				</div>
					<div id="subPublicidad" class="accordio-body collapse">
						<div class="accordion-inner btn-inverse">
							<ul>
								<li>Karla Ivone Villa Gordillo</li>
								<li>Luis Armando Pimentes Guzmán</li>
								<li>Delmar Cancino Hernandez</li>
							</ul>
						</div>
					</div>
				</div>
			
			<div class="accordion-group">
				<div class="accordion-heading">
					<a class="accordion-toggle btn" data-toggle="collapse" data-parent"#comite" href="#subCompras">
						Subcoordinacion de Compras
					</a>
				</div>
					<div id="subCompras" class="accordio-body collapse">
						<div class="accordion-inner btn-inverse">
							<ul>
								<li>Karla Ivone Villa Gordillo</li>
								<li>Luis Armando Pimentes Guzmán</li>
							</ul>
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