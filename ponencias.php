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
		<?php
		include 'clases/phpDataClass.php';
		include 'conexion.php';	
		
		
		if ($objDatos=$clsDataClass->recordsList("select clave, nombre from talleres")) {
			if (count($objDatos)>0) {
				foreach ($objDatos as $objTaller) {
					?><div class="span5"><p class="alert-error"><?php echo "id del taller: " . $objTaller['clave'];
					echo "</p>";
					?><p class="alert-success"><?php echo "nombre del taller: " . $objTaller['nombre'];?></p><a class="btn btn-success btn-small">Quiero asistir a este taller</a><hr/></div><?php
				}
			} else {
				echo "Por el momento no hay ponencias que mostrar.";
			}
		} else {
			echo "$clsDataClass->lastError()";
		}
		?>
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