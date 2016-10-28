<!DOCTYPE html>
<html>
<head>
	<title>eliminar equipajes</title>
			<style type="text/css">
		*{margin: 0;padding: 0;}
		html{background-color: black;}
		body{width: 500px;height: 200px; margin: auto;background-color: orange}
	</style>
</head>
<body>
	<center>
	<br>
	<h1>ELIMINAR PRODUCTOS</h1>
	<br>
	<form action="eliminarbd.php" method="post">
		Ingrese la descripcion del producto:
		<input type="text" name="descripcion">
		<br>
		<br>
		<br>
		<input type="submit" value="buscar">
		<br>
	</form>
	</center>

</body>
</html>