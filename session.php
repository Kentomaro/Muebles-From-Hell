<?php
		session_start();
		include('php_conexion.php'); 
		
		$usu=$_SESSION['username'];
		if(!$_SESSION['tipo_usu']=='a' or !$_SESSION['tipo_usu']=='ca'){
			header('location:error.php');
		}
		if($_SESSION['tipo_usu']=='a' ){
			$titulo='Administrador';

		}else{
			$titulo='Cajero';
			
		}
?>