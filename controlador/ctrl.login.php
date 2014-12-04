<?php 
session_start();

require('modelos/usuarios.class.php');

class ctrl_login
{
	function principal()
	{
		$pagina=$this->load_template('Muebles From Hell');
		$html=$this->load_page('vistas/login.php');
		$pagina=$this->replace_content('/\#CONTENIDO\#/ms',$html,$pagina);
		$this->view_page($pagina);
	}
	

	function load_template($title='Sin Titulo')
	{
		$pagina = $this->load_page('vistas/page.php');
		$header = $this->load_page('vistas/s.header.php');
		$pagina = $this->replace_content('/\#HEADER\#/ms' ,$header , $pagina);
		$pagina = $this->replace_content('/\#TITLE\#/ms' ,$title , $pagina);
		return $pagina;
	}
	
	function principal_error()
	{
		$pagina=$this->load_template_error('Muebles From Hell');
		$html=$this->load_page('vistas/login.error.php');
		$error = $this->load_page('vistas/s.error.php');
		$pagina=$this->replace_content('/\#CONTENIDO\#/ms',$html,$pagina);
		$pagina = $this->replace_content('/\#ERROR\#/ms' ,$error , $pagina);
		$this->view_page($pagina);
	}

	function load_template_error($title='Sin Titulo')
	{
		$pagina = $this->load_page('vistas/page.php');
		$header = $this->load_page('vistas/s.header.php');
		$error = $this->load_page('vistas/s.error.php');
		$pagina = $this->replace_content('/\#HEADER\#/ms' ,$header , $pagina);
		$pagina = $this->replace_content('/\#TITLE\#/ms' ,$title , $pagina);
		$pagina = $this->replace_content('/\#ERROR\#/ms' ,$error , $pagina);
		return $pagina;
	}
	
	private function load_page($page)
	{
		return file_get_contents($page);
	}
	
	private function view_page($html)
	{
		echo $html;
	}
	
	private function replace_content($in='/\#CONTENIDO\#/ms', $out,$pagina)
	{
		 return preg_replace($in, $out, $pagina);	 	
	}
	
	function acceso($usu,$con)
	{	
		$usuario = new usuarios();

		ob_start();
		
		$dArray = $usuario->usuarios($usu,$con);
		
				
			if($dArray != '')
			{	
				foreach($dArray as $dato)
				{
					$_SESSION['username']=$dato['usu'];
					$_SESSION['tipo_usu']=$dato['tipo'];
					$_SESSION['nom']=$dato['nom'];
					$_SESSION['tventa']="venta";
					$_SESSION['ddes']=0;
				
				}
					if($_SESSION['tipo_usu']=='a')
					{
						header('location:Administrador.php');
					}
					if($_SESSION['tipo_usu']=='ca')
					{
						header('location:cajero.php');
					}

			} else{
				ob_clean();
					
					$this->principal_error();	
					
				
			}
			
		}
	}


?>