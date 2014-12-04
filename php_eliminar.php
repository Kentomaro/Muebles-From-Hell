<?php
session_start();
include('php_conexion.php');
$usuario=$_SESSION['username'];
$cod = $_GET['id'];
if(!$_SESSION['username']==""){

	if(!empty($cod)){
		$cann=mysql_query("DELETE FROM caja_tmp where cod='$cod'");	
	}
}
header('location:caja.php?ddes='.$_SESSION['ddes']);
?>