<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ingresar datos a la DB</title>
</head>
<body>

<form method="POST" action="guardar.php" enctype="multipart/form-data">
	<input type="text" name="Nombre" placeholder="Nombre"/>
	<input type="file" name="Imagen"/>
	<textarea name="Descripcion"></textarea>
	<input type="submit" name="" value="Aceptar">

</form>

</body>
</html>