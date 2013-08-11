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
	<!-- Plugin de Facebbok -->
	<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>
	
<body>
<?php
    include 'menu.php';
?>

<div class="container">
	<div class="row">
		<div class="span12">
		<div class="row">
			<div class="span5">
				<h3>Noticias</h3>
				<div class="span3">
				<div class="fb-like-box" data-href="https://www.facebook.com/CII.ITSC" data-width="400" data-show-faces="true" data-colorscheme="dark" data-stream="true" data-show-border="false" data-header="false"></div>
				</div>
				<hr>
			</div>
			<div class="span6">
				<?php include 'slider.html'; ?>
			</div>
		</div>
		</div>
	</div>
	
	<script>
	  var navigation = responsiveNav("#nav", {
	  	customToggle: "#toggle",
	  	openPos:"relative",
	  	animate:true});
	</script>
<div class="span12">
		<?php include 'footer.html'; ?>
</div>
</div>
	<script src="js/jquery-1.10.1.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>