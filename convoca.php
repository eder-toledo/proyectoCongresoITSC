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
<link href="convoc.css" rel="stylesheet" type="text/css">
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
    <div id="menu"></div>
    <div id="vonvoca">
    	<p class="text-center"><strong>El INSTITUTO TECNOLÓGICO SUPERIOR DE CINTALAPA CONVOCA</strong></p>
		<p class="text-center">A la comunidad académica, estudiantil del país y del extranjero, a participar en el:</p>
		<h4 class="text-center"><p class="text-info"><em>2o CONGRESO INTERNACIONAL MULTI E INTERDISCIPLINARIO DE INGENIERIAS</em></p></h4>
		<p class="text-center"><strong>Ejes Temáticos</strong></p>
		<p class="text-center">Los ejes temáticos están catalogados en las seis especialidades de los programas educativos que se imparten en nuestra Institución, 
			sin embargo, no son excluyentes hacia otras áreas que pudieran postularse a presentarse en el marco de este Congreso.</p>
		<hr>
	</div>
    <div id="informatica">
      <div id="imagen">
      	<img src="imagenes/inf.jpg" class="img-rounded"/></td>
  	 </div>
      <div id="tematica-inf">
		<p><strong>Ingenieria en Informatica</strong></p>
		<p><small>- Programación Web</small></p>
		<p><small>- Inteligencias de máquinas</small></p>
      </div>
    </div>
    <div id="industrial">
      <div id="imagen2">
      	<img src="imagenes/industrial.jpg" class="img-rounded"/></td>
      </div>
      <div id="tematica-ind">
      	<p><strong>Ingenieria Industrial</strong></p></td>
      	<p><small>- Implementación de Innovación Tecnológica en los Procesos de Emprendedurismo Universitario</small></p>
		<p><small>- Desarrollo de Simuladores Tecnológicos.</small></p>
		<p><small>- Calidad y Productividad  para la competitividad y sustentabilidad</small></p>
      </div>
    </div>
    <div id="alimentarias">
      <div id="imagen3">
      	<img src="imagenes/alimentarias.jpg" class="img-rounded"/>
      </div>
      <div id="tematica-ali">
      	<p><strong>Ingenieria en Industrias Alimentarias</strong></p>
      	<p><small>Procesos en la Industria de los Alimentos con áreas en:</small></p>
      	<p><small>- Materias primas de origen animal y vegetal </small></p>
      	<p><small>- Aspecto Ambiental, Calidad y Normalización</small></p>
      	<p><small>- Escalamiento de procesos alimentarios y Biotecnológicos</small></p>
      </div>
    </div>
    <div id="comunitario">
      <div id="imagen4">
      	<img src="imagenes/comunitario.jpg" class="img-rounded"/>
      </div>
      <div id="tematica-com">
      	<p><strong>Ingenieria en Desarrollo Comunitario</strong></p>
      	<p><small>- Ordenamiento Territorial </small></p>
      	<p><small>- Desarrollo Rural Sustentable </small></p>
      	<p><small>- Sistemas sustentables de  Producción Agropecuario</small></p>
      </div>
    </div>
    <div id="energias">
      <div id="imagen5">
      	<img src="imagenes/energias.jpg" class="img-rounded"/>
      </div>
      <div id="tematica-ene">
      	<p><strong>Ingenieria en Energias Renovables</strong></p>
      	<p><small>- Eficiencia Energética</small></p>
      	<p><small>- Energías alternas</small></p>
      </div>
    </div>
    <div id="civil">
      <div id="imagen6">
      	<img src="imagenes/civil.jpeg" class="img-rounded"/>
      </div>
      <div id="tematica-civil">
      	<p><strong>Ingenieria Civil</strong></p>
      	<p><small>- Edificacion Antisismos</small></p>
      	<p><small>- Construccion de Presas Hidroelectricas</small></p>
      </div>
    </div>
    <div id="footer">
    	<?php include 'footer.html'; ?>
    </div>
  </div>
</div>
	<script src="js/jquery-1.10.1.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>