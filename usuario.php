<!DOCTYPE html>
<html>
<head>
	<title>INSERTAR USUARIOS</title>
		<style type="text/css">
		*{margin: 0;padding: 0;}
		html{background-color: black;}
		body{width: 500px;height: 200px; margin: auto;background-color: orange}
	</style>
</head>
<body>
	<center>
			<h1>CREAR CUENTA DE USUARIO</h1>
		<form action="usuariobd.php" method="post">
			USUARIO:
			<input type="text" name="usuario"><br>
			<br>
			CLAVE:
			<input type="int" name="clave"><br>
			<br>
			NOMBRE:
			<input type="int" name="nombre"><br>
			<br>
			CORREO:
			<input type="int" name="correo"><br>
			<br>
			<input type="submit" value="Crear">
		</form>
	</center>

</body>
</html>