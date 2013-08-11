<!doctype html>
<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>2o Congreso ITSC</title>
<link href="boilerplate.css" rel="stylesheet" type="text/css">
<link href="fluido/envio.css" rel="stylesheet" type="text/css">
<!-- 
Para obtener más información sobre los comentarios condicionales situados alrededor de las etiquetas html en la parte superior del archivo:
paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/
  
Haga lo siguiente si usa su compilación personalizada de modernizr (http://www.modernizr.com/):
* inserte el vínculo del código js aquí
* elimine el vínculo situado debajo para html5shiv
* añada la clase "no-js" a las etiquetas html en la parte superior
* también puede eliminar el vínculo con respond.min.js si ha incluido MQ Polyfill en su compilación de modernizr 
-->
<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="respond.min.js"></script>

<!-- Agregamos los estilos de bootstrap -->
		<!—[if lt IE 9]>
	      <script src="js/html5.js"></script>
	    <![endif]—>
	    <link href="css/bootstrap.min.css" rel="stylesheet">
	    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
</head>
<body>
	<?php include 'menu.php'; ?>
<div class="gridContainer clearfix">
  <div id="LayoutDiv1">
    <div id="descripcion">
    	<p class="text-center"><strong>Descarga de formatos de trabajos según el área.</strong></p>
		<p class="text-center">Fecha límite de recepción de trabajos: 13 de Septiembre de 2013.</p>
		<h4 class="text-center"><p class="text-info"><em>Enviar trabajos a: depi@tecdecintalapa.edu.mx</em></p></h4>
		<p class="text-center"><strong> Fecha de publicación de trabajos aceptados: 27 de Septiembre de 2013.</strong></p>
		<p class="text-center">Tu trabajo será incluido en el libro electrónico, despues de haber realizado la inscripción correspondiente.</p>
		<hr>
    </div>
    <div id="informatica">
      	<img src="imagenes/inf.jpg" class="img-rounded"/>
		<p class="text-center"><strong><a href="documentos/Formato-Ing_Informatica.docx">Ingenieria en Informatica</a></strong></p>
    </div>
    <div id="industrial">
      	<img src="imagenes/industrial.jpg" class="img-rounded"/>
      	<p class="text-center"><strong><a href="documentos/Formato-Ing_Ind.docx">Ingenieria Industrial</a></strong></p>
    </div>
    <div id="alimentarias">
      	<img src="imagenes/alimentarias.jpg" class="img-rounded"/>
      	<p class="text-center"><strong><a href="documentos/Formato-Ing_Alimentarias.docx">Ingenieria en Industrias Alimentarias</a></strong></p>
    </div>
    <div id="desarrollo">
      	<img src="imagenes/comunitario.jpg" class="img-rounded"/>
      	<p class="text-center"><strong><a href="documentos/Formato-Ing_Desarrollo.docx">Ingenieria en Desarrollo Comunitario</a></strong></p>
    </div>
    <div id="energias">
      	<img src="imagenes/energias.jpg" class="img-rounded"/>
      	<p class="text-center"><strong><a href="documentos/Formato-Ing_Energias.docx">Ingenieria en Energias Renovables</a></strong></p>
    </div>
    <div id="civil">
      	<img src="imagenes/civil.jpeg" class="img-rounded"/>
      	<p class="text-center"><strong><a href="documentos/Formato-Ing_Civil.docx">Ingenieria Civil</a></strong></p>
    </div>
    <div id="libre">
    	<img src="imagenes/logo tec.jpg" class="img-rounded" />
    	<p class="text-center"><strong><a href="documentos/Formato-Area_Libre.docx">Area Libre</a></strong></p>
    </div>
    <div id="descripcion">
		<?php include 'footer.html'; ?>
	</div>
  </div>
</div>
	<script src="js/jquery-1.10.1.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>