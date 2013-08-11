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
		
		$query="select * from ponentes";
		
		if ($objDatos=$clsDataClass->recordsList($query)) {
			if (count($objDatos)>0) {
				foreach ($objDatos as $objPonentes) {
					$clave=$objPonentes['claveponente'];
					$nombre=$objPonentes['nombre'];
					?>
					<div class="span1 offset1">
						<a data-toggle="modal" class="btn btn-inverse" href="#mod<?php echo $clave; ?>" >Clave de Ponente: <?php echo $clave; ?></a>
						<div><br /></div>
					</div>
					
					<div align="center" id="mod<?php echo $objPonentes['claveponente']; ?>" class="modal hide fade in" style="display: none;" >
						<div class="modal-header">
							<a data-dismiss="modal" class="close" >x</a>
							<h3>Ponente: <?php echo $objPonentes['nombre']; ?></h3>
						</div>
						<div class="modal-body">
							<p><?php echo $objPonentes['origen']; ?></p>
							<p><?php echo $objPonentes['informacion']; ?></p>
						</div>
						<div class="modal-footer">
							<!--a href="index.html" class="btn btn-success">Guardar</a-->
					        <a href="#" data-dismiss="modal" class="btn">Cerrar</a>
						</div>
					</div>
					<?php
				}
			} else {
				echo "Por el momento no hay ponentes que mostrar.";
			}
			
		} else {
			//echo "$clsDataClass->lastError()";
			echo "Por el momento no hay ponentes que mostrar.";
		}
		
		
?>
		<div class="span12">
			<br />
			<br />
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
	</div>
	<script src="js/jquery-1.10.1.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>