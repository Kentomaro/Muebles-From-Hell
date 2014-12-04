<?php
//	$conexion = mysql_connect("mysql5.000webhost.com","a8475630_celular","america2007");
//	mysql_select_db("a8475630_celular",$conexion);
	if(!empty($_SESSION['username']) and !empty($_SESSION['tipo_usu'])){
		$usu=$_SESSION['username'];
		$tip=$_SESSION['tipo_usu'];
	}
	
	$conexion = mysql_connect("localhost","root","123");
	mysql_select_db("datos",$conexion);
	
	date_default_timezone_set("America/Hermosillo");
?>