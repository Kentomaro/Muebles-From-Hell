		<?php
		include('../php_conexion.php');
	
$act="1";
		if(!empty($_POST['usuario']) and !empty($_POST['contra'])){
			$usuario=$_POST['usuario'];
			$contra=$_POST['contra'];
			$can=mysql_query("SELECT * FROM usuarios WHERE (usu='".$usuario."' or ced='".$usuario."') and con='".$contra."'");
			if($dato=mysql_fetch_array($can)){
				$_SESSION['username']=$dato['usu'];
				$_SESSION['tipo_usu']=$dato['tipo'];
				//inicializa las variables de caja por defecto//
				$_SESSION['tventa']="venta";
				$_SESSION['ddes']=0;
				///////////////////////////////
				if($_SESSION['tipo_usu']=='a'){
					header('location:../Administrador.php');
				}
				if($_SESSION['tipo_usu']=='ca'){
					header('location:../cajero.php');
				}
				if($_SESSION['tipo_usu']=='cl'){
					
					header('location:../2/index.php');
					//$_SESSION['username'];
					$_SESSION['contra'];
				}
			}else{
				if($act=="1"){echo '<div class="alert alert-error" align="center">Usuario y Contraseña Incorrecta</div>';}else{$act="0";}
			}
		}else{
			
		}

 ?>
