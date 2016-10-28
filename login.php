<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
		<meta charset"utf-8">
	<style type="text/css">
		*{margin: 0;padding: 0;}
		html{background-color: black;}
		body{width: 500px;height: 200px; margin: auto;background-color: orange}
	</style>
</head>
<body>
	<center>
		<h1>LOGIN</h1>
		<br>
		<table border="1" bgcolor="yellow">
			<form action="salida.php" method="post">
				<tr>
					<td><label>USUARIO :</label></td>
					<td><input type="text" name="usuario" value=""> <br></td>
				</tr>
				<tr>
					<td><label>PASSWORD:</label></td>
					<td><input type="password" name="clave" value=""><br></td>
				</tr>
				<tr>

					<td></td>
					<td></td>
				</tr>
			</form>
		</table>
		<br>
		<form action="administracion.php" method="post"> 
			<input type="submit" value="Ingresar">
		</form>
		<br>
		<form action="usuario.php" method="post">
			<input type="submit" value="CREAR CUENTA">
		</form>
	</center>
</body>
</html>