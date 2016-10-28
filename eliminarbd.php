<!DOCTYPE html>
<html>
<head>
	<title>ELIMINAR</title>
</head>
<body>
	<?php 
		$conexion=mysql_connect("localhost","root","")or die("Problemas en la conexion");
		mysql_select_db("bd_farmacia",$conexion) or die("Problemas en la seleccion de la base de datos");
		$registros=mysql_query("select id_productos from productos where descripcion='$_REQUEST[descripcion]'",$conexion) or die ("problemas en el select:".mysql_error());
		if ($reg=mysql_fetch_array($registros)) {
			mysql_query("delete from productos where descripcion='$_REQUEST[descripcion]'",$conexion)OR die("problemas en el select:".mysql_error());
			echo "Se efectuo el borrado del producto";
		}
		else
		{
			echo "No existe el producto con esa descripcion";
		}
	 ?>
</body>
</html>