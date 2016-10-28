<?php
	$username = $_POST['user'];
	$password = $_POST['pass'];

	$username = stripslashes($username);
	$password = stripslashes($password);
	$username = mysql_real_escape_string($username);
	$password = mysql_real_escape_string($password);

	mysql_connect("localhost","root","");
	mysql_select_db("bd_farmacia");

	$result= mysql_query("select * from usuario where usuario='$username' and clave='$password'")
	or die("fallo la consulta con la base de datos".mysql_error());
	$row = mysql_fetch_array($result);
	if ($row ['usuario']==$username&& $row['clave']==$password  ){
		header('Location:administracion.php');
		
	}
	else
	{
		 echo "<br>";
		 echo "<br>";
		 echo "<br>";
		 echo "<br>";
		 echo "<center><h2>Error al ingresar</h2></center>";
		 echo "<br>";
		 echo "<center><h4>CONTACTESE CON SU POROVEEDOR DE SOFTWARE</h4></center>";

	}


  ?>