<?php 
$conexion=mysqli_connect("localhost","root","","db_pokedex");
if($conexion){
	echo "conectado"."<br>";
	}
	else{
		echo "no conectado";
	}
 ?>
