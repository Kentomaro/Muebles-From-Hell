<?php

require_once "db.class.php";

class usuarios extends database {


	function usuarios($usuario = NULL,$contra = NULL)
	{	
		//conexion a la base de datos
		$this->conectar();		
		$query = $this->consulta("SELECT * FROM usuarios WHERE (usu='$usuario' or ced='$usuario') and con='$contra'");		
		if($this->numero_de_filas($query) > 0) // existe -> datos correctos
		{
				//se llenan los datos en un array
				while ( $dArray = $this->fetch_assoc($query) ) 
				
					$data[] = $dArray;			
						
				return $data;
		var_dump($data);
			
		}else
		{	
			return '';
		}	
			
	}

}

?>