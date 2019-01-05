<?php 
include "conexion.php";
$nombre=$_POST['Nombre'];
$imagen=addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));
$descripcion=$_POST['Descripcion'];
$query="insert into Pokemon(Imagen,Nombre,Descripcion) values('$imagen','$nombre','$descripcion')";
$resultado=$conexion->query($query);
if($resultado){
	echo "se inserto correctamente";}
	else{
		echo "no se inserto";
	}
 ?>
