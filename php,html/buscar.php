<?php 
$nombre=$_POST['Nombre'];
 ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../bootstrap4/bootstrap.min.css">
	<link rel="icon" type="image/png" href="../iconos/lupa.png">
	<link rel="stylesheet" type="text/css" href="../css/estilos.css">
	<meta charset="utf-8">
	<title><?php
echo $nombre;
	?></title>
</head>
<body>
<div id="agrupar" name="general">
	<?php 
    include "menu.html";
	 ?>

	<section id="pokedex">
      <div name="pokemon">
		<?php 
		include "busqueda_db.php";

		 ?>
 	
 	  </div>
	</section>

	<footer name="piedepagina">2018 cDIAZs</footer>
</div>
</body>
</html>