<!DOCTYPE html>
<html>
<head>
	<title>LISTA DE PRODUCTOS</title>
			<style type="text/css">
		*{margin: 0;padding: 0;}
		html{background-color: black;}
		body{width: 500px;height: 1000px; margin: auto;background-color: orange}
	</style>
</head>
<body>
	<center>
		<h1>LISTA DE PRODUCTOS</h1>
		<?php
		$conexion=mysql_connect("localhost","root","")or die("Problemas en la conexion");
		mysql_select_db("bd_farmacia",$conexion) or die("Problemas en la seleccion de la base de datos");
		$registros=mysql_query("select id_productos,descripcion,costo_unitario,cantidad,stock_minimo from productos",$conexion) or die ("problemas en el select:".mysql_error());
		while ($reg=mysql_fetch_array($registros)) {
			echo "ID_PRODUCTOS".$reg['id_productos']."<br><br>";
			echo "DESCRIPCION".$reg['descripcion']."<br><br>";
			echo "COSTO_UNITARIO".$reg['costo_unitario']."<br><br>";
			echo "CANTIDAD".$reg['cantidad']."<br><br>";
			echo "STOCK_MINIMO".$reg['stock_minimo']."<br><br>";
		}

	  ?>
	  </center>
	  <center>
	  	<form action=" eliminar.php" method="post"> 
			<input type="submit" value="QUIERE ELIMINAR ALGUN PRODUCTO ?">
		</form>
	  </center>
</body>
</html>