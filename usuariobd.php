<!DOCTYPE html>
<html>
<head>
	<title>REGISTRAR USURIO</title>
</head>
<body>
		<?php 
		$conexion=mysql_connect("localhost","root","")or die("Problemas en la conexion");
		mysql_select_db("bd_farmacia",$conexion) or die("Problemas en la seleccion de la base de datos");
		mysql_query("insert into usuario(usuario,clave,nombre,correo)values('$_REQUEST[usuario]','$_REQUEST[clave]','$_REQUEST[nombre]','$_REQUEST[correo]')",$conexion) or die("Problemas en el select".mysql_error());
		mysql_close($conexion);
		echo "Usuario Registrado";
	 ?>

</body>
</html>