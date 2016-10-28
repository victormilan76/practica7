<!DOCTYPE html>
<html>
<head>
	<title>INSERTAR UN PRODUCTO</title>
		<style type="text/css">
		*{margin: 0;padding: 0;}
		html{background-color: black;}
		body{width: 500px;height: 200px; margin: auto;background-color: orange}
	</style>
</head>
<body>
	<center>
	<h1>REGISTRAR PRODUCTO</h1>
	<br>

	<form action="insertarproductobd.php" method="post">
			DESCRIBA SU PRODUCTO:
			<input type="text" name="descripcion"><br>
			<br>
			COSTO UNITARIO:
			<input type="int" name="costo_unitario"><br>
			<br>
			CANTIDAD:
			<input type="int" name="cantidad"><br>
			<br>
			STOCK_MINIMO:
			<input type="int" name="stock_minimo"><br>
			<br>
			<input type="submit" value="Registrar Producto">
		</form>
	</center>
</body>
</html>