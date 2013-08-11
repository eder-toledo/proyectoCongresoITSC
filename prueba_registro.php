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
	@$testigo=$_POST['testigo'];
	
	if ($testigo<>1) {
	?>
		<!-- creamos el boton con el cual vamos a abrir la ventana modal -->
  	
	  	<table width="100%" height="100%">
	  		<tr>
	  			<td align="center" valign="center"><img src="imagenes/usertec.png" width="120" height="120" data-toggle="modal" href="#example" class="btn btn-small"/><br><a data-toggle="modal" href="#example" class="btn btn-inverse">Registro alumnos ITSC</a></td>
	  		</tr>
	  		<tr><td><br /><br /></td></tr>
	  		<tr>
	  			<td align="center" valign="center"><img src="imagenes/user1.png" width="120" height="120" data-toggle="modal" href="#example2" class="btn btn-small" /><br><a data-toggle="modal" href="#example2" class="btn btn-inverse">Registro alumnos General</a></td>
	  		</tr>
	  	</table>
	  	<br /><br />
	  	<!-- agregamos el div contenedor de la ventana modal -->
	  	
	  	<div align="center" id="example" class="modal hide fade in" style="display: none;">
		    <div class="modal-header">
		        <a data-dismiss="modal" class="close">x</a>
		        <h3>Registro de alumnos del ITSC al 2o Congreso Internacional de Ingenierias</h3>
		     </div>
		     <div class="modal-body">
		             <form method="post" action="prueba_registro.php">
					    <fieldset>
					    	<input type="number" placeholder="No de control" name="nocontrol" value="" required="" maxlength="8" />
					    	<input type="text" placeholder="Nombres" name="nombre" value="" required="" />
						    <input type="text" placeholder="Apellidos" name="apellidos" value="" required="" />
						    <input type="email" placeholder="Correo electronico" name="correo" value="" required="" />
						    <select  name="carrera">
						    		<option value="0">Carrera</option>
						    		<option value="Alimentarias">Ing Ind Alimentarias</option>
						    		<option value="Industrial">Ing Industrial</option>
						    		<option value="Informatica">Ing. Informatica</option>
						    		<option value="Desarrollo">Ing Des Comunitario</option>
						    		<option value="Energias">Ing Ene Renovables</option>
						    		<option value="Civil">Ing Civil</option>
						    </select><br>
						    <input type="password" placeholder="Contraseña" name="contrasena" value="" required="" />
						    <input type="hidden" name="tipo_alumno" value="interno" />
						    <input type="hidden" name="pago" value="0" /><br />
						    <button type="submit" class="btn btn-primary">Registrar</button>
					    </fieldset>
					    <input type="hidden" name="testigo" value="1"/>
				    </form>                
		    </div>
		    <div class="modal-footer">
		        <!--a href="index.html" class="btn btn-success">Guardar</a-->
		        <a href="#" data-dismiss="modal" class="btn">Cerrar</a>
		    </div>
		</div>
		
		<div align="center" id="example2" class="modal hide fade in" style="display: none;">
		    <div class="modal-header">
		        <a data-dismiss="modal" class="close">x</a>
		        <h3>Registro de alumnos al 2o Congreso Internacional de Ingenierias</h3>
		     </div>
		     <div class="modal-body">
		             <form method="post" action="prueba_registro.php">
					    <fieldset>
					    	<input type="number" placeholder="Clave" name="nocontrol" value="" required="" maxlength="8" />
					    	<input type="text" placeholder="Nombres" name="nombre" value="" required="" />
						    <input type="text" placeholder="Apellidos" name="apellidos" value="" required="" />
						    <input type="email" placeholder="Correo electronico" name="correo" value="" required="" />
						    <select name="carrera">
						    		<option value="0">Area de interes</option>
						    		<option value="Alimentarias">Ing Ind Alimentarias</option>
						    		<option value="Industrial">Ing Industrial</option>
						    		<option value="Informatica">Ing. Informatica</option>
						    		<option value="Desarrollo">Ing Des Comunitario</option>
						    		<option value="Energias">Ing Ene Renovables</option>
						    		<option value="Civil">Ing Civil</option>
						    </select><br>
						    <input type="password" placeholder="Contraseña" name="contrasena" value="" required="" />
						    <input type="hidden" name="tipo_alumno" value="interno" />
						    <input type="hidden" name="pago" value="0" /><br />
						    <button type="submit" class="btn btn-primary">Registrar</button>
					    </fieldset>
					    <input type="hidden" name="testigo" value="1"/>
				    </form>                
		    </div>
		    <div class="modal-footer">
		        <!--a href="index.html" class="btn btn-success">Guardar</a-->
		        <a href="#" data-dismiss="modal" class="btn">Cerrar</a>
		    </div>
		</div>
	<?php
	}
else {
	$nocontrol=$_POST['nocontrol'];
	$nombre=$_POST['nombre'];
	$apellidos=$_POST['apellidos'];
	$correo=$_POST['correo'];
	$carrera=$_POST['carrera'];
	$contrasena=$_POST['contrasena'];
	$tipoalumno=$_POST['tipo_alumno'];
	$pago=$_POST['pago'];
	
	include 'conexion.php';
	
	$consulta="select * from participates where nocontrol = '$nocontrol'";
	$resultado=mysql_query($consulta);
	
	if (!$resultado) {
		$error=3;
	}
	
	$row= mysql_fetch_array($resultado);
	$row1 = $row["nocontrol"];
	
	if ($row1<>$nocontrol) {
		
		$sql="insert into participantes (nocontrol, nombre, apellidos, correo, carrera, contrasena, pago, tipo_alumno) values ('$nocontrol', '$nombre', '$apellidos', '$correo', '$carrera', '$contrasena', '$pago', '$tipoalumno' )";
		$res=mysql_query($sql)or die ("ocurrio un error");
		
		if (!$res) {
			?>
			<div class="alert alert-error">
				<p>Se a producido un error al realizar el registro en nuestro sistema. X(</p>
				<a href="menu_registro.php">Regresar</a>
			</div>
			<?php
			$error=1;
			exit();
		} else {
			$error=2;
		}
		
		
	} else if ($row1==$nocontrol){
		?>
		<div class="alert alert-error">
			<h4>Error..!!!</h4>
			<p>El numero de control ingresado ya ha sido registrado en nuestro sistema con anterioridad.</p>
			<p>Te recomendamos intentarlo nuevamente.</p>
			<a class="btn btn-mini btn-danger" href="menu_registro.php">Regresar</a>
		</div>
		<?php
		$error=1;
	}
	
	if ($error==2) {
	?>
	<table class="table">
		<tr>
			<td colspan="2"><p><h3>Has realizado el preregistro al 2o Congreso Internacional de Ingenierias con los siguientes datos:</h3></p></td>
		</tr>
		<?php echo "<tr><td>" . $nocontrol . "</td></tr>"; ?>
		<tr><td><?php echo $nombre; ?></td></tr>
		<tr><td><?php echo $apellidos; ?></td></tr>
		<tr><td><?php echo $correo; ?></td></tr>
		<tr><td><?php echo $carrera; ?></td></tr>
		<tr><td><?php echo $contrasena; ?></td></tr>
		<tr><td><?php echo $tipoalumno; ?></td></tr>
		<tr><td><?php echo $pago; ?></td></tr>
	</table>
	<?php
	}else if($error==3){
		?>
		<div class="alert alert-error">
			<p>Se ha presentado un error intenta de nuevo X(</p>
			<a href="menu_registro.php">Regresar</a>		
		</div>
		<?php
	}
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
</div>
	<script src="js/jquery-1.10.1.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>