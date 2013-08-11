<html>
<body>
<form action="" method="post" enctype="multipart/form-data">
	<input type="email" required="" placeholder="correo electronico" /><br>
	<input type="file" required="" name="archivo" id="archivo" /><br><br>
	<input type="submit" class="btn btn-inverse" name="boton" value="Subir" />
</form>
<div class="resultado">
<?php
error_reporting(0);
@$correo=$_POST[''];
if(isset($_POST['boton'])){
	// Hacemos una condicion en la que solo permitiremos que se suban imagenes y que sean menores a 20 KB
	$nombre =  $_FILES['archivo']['name'];            //nombre con el que lo subió el usuario
$tipo =  $_FILES['archivo']['type'];            //tipo de archivo (jpg,gif,rar,txt,etc)
$tamano = $_FILES['archivo']['size'];            //tamaño del archivo en Kb; 1024Kb = 1Mb
$error = $_FILES['archivo']['error'];            //si apareció algún error en la subida
$nombre_temporal = $_FILES['archivo']['tmp_name'];    //Nombre temporal que se le asigna al archivo cuando sube a tu servidor
 
$nuevo_nombre = 'Propuesta de archivo de: ' . $correo;
 
//Reviso que el archivo sea del tipo ZIP o RAR; y que pese menos de 5Mb
if (!((strpos($tipo, "odt") || strpos($tipo, "doc")|| strpos($tipo, "docx")|| strpos($tipo, "pdf")) && ($tamano_archivo < 2048))) {
       		?><span class=" label label-important"><?php  
       echo "     El tipo de archivo o el tamaño no es correcto.     ";
	   ?></span><?php
}else{ 
       //Verifico que pueda mover el archivo y cambiarle el nombre. El archivo se guardará donde esta la pagina
    if (move_uploaded_file($nombre_temporal, "archivos/$nuevo_nombre")){
    		?><span class=" label label-success"><?php   
           echo "     El archivo se ha subido satisfactoriamente!!.     ";
		   ?></span><?php 
       }else{
           	?><span class=" label label-important"><?php  
           echo "     Error al subir el archivo. Inténtelo nuevamente.     "; 
		   ?></span><?php
       } 
} 
}
?>
</div>
</body>
</html>