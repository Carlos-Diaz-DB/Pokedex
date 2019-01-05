

<?php
$conexion=mysqli_connect("localhost","root","","db_pokedex");
$query='select * from Pokemon where Nombre='.'"'.$_POST['Nombre'].'"';// where Nombre='.'"'.$Nombre.'"'
//$query=mysqli_query($conexion,'select * from Pokemon where Nombre='.'"'.$Nombre.'"');
$resultado=$conexion->query($query);

while($row=$resultado->fetch_assoc()){

?>

 
 <img src="data:image/png;base64,<?php echo base64_encode($row['Imagen']); ?>" name="imagenes"/>
<?php 
	//echo '<h2 name="no_id">#'.$row['Id'].'</h2>';
	echo '<h2 name="timg">'.$row['Nombre'].'</h2>';
	echo '<p name="imgdescripcion">'.$row['Descripcion'].'</p>';
  ?>
<?php  


	}

 ?>
