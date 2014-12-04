<?php 
session_start();
$usu = $_SESSION['username'];
include('php_conexion.php');
if(!$_SESSION['username']==""){
		$cann=mysql_query("DELETE FROM caja_tmp where usu='$usu'");	
}
$_SESSION['tipo_usu']=NULL;
header("location:index2.php");
?>