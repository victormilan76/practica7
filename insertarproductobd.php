<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
	<?php 
		$conexion=mysql_connect("localhost","root","")or die("Problemas en la conexion");
		mysql_select_db("bd_farmacia",$conexion) or die("Problemas en la seleccion de la base de datos");
		mysql_query("insert into productos(descripcion,costo_unitario,cantidad,stock_minimo)values('$_REQUEST[descripcion]','$_REQUEST[costo_unitario]','$_REQUEST[cantidad]','$_REQUEST[stock_minimo]')",$conexion) or die("Problemas en el select".mysql_error());
		mysql_close($conexion);
		echo "Producto registrado con exito";
	 ?>

</body>
</html>