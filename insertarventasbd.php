<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
	<?php 
		$conexion=mysql_connect("localhost","root","")or die("Problemas en la conexion");
		mysql_select_db("bd_farmacia",$conexion) or die("Problemas en la seleccion de la base de datos");
		mysql_query("insert into ventas(cantidad,total)values('$_REQUEST[cantidad]','$_REQUEST[total]')",$conexion) or die("Problemas en el select".mysql_error());
		mysql_close($conexion);
		echo "Venta registrada con exito";
	 ?>

</body>
</html>