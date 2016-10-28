<!DOCTYPE html>
<html>
<head>
	<title>INSERTAR VENTAS</title>
		<style type="text/css">
		*{margin: 0;padding: 0;}
		html{background-color: black;}
		body{width: 500px;height: 200px; margin: auto;background-color: orange}
	</style>
</head>
<body>
	<center>
	<br>
		<h1>INSERTAR VENTAS</h1>
		<br>
		<form action="insertarventasbd.php" method="post">
			CANTIDAD:
			<input type="text" name="cantidad"><br>
			<br>
			TOTAL:
			<input type="int" name="total"><br>
			<br>
			<input type="submit" value="REGISTRAR VENTA">
		</form>
	</center>

</body>
</html>