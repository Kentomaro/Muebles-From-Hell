<?php
 		session_start();
		$fechaR = $_POST['fecha'];
		$nombre = $_POST['usuario'];
		require_once("dompdf/dompdf_config.inc.php");
		include('php_conexion.php'); 
		if(!$_SESSION['tipo_usu']=='a' or !$_SESSION['tipo_usu']=='ca'){
			header('location:error.php');
		}
		$can=mysql_query("SELECT * FROM empresa where id=1");
		if($dato=mysql_fetch_array($can)){
			$empresa=$dato['empresa'];
			$nit=$dato['nit'];
			$direccion=$dato['direccion'];
			$ciudad=$dato['ciudad'];
			$tel1=$dato['tel1'];
			$tel2=$dato['tel2'];
			$web=$dato['web'];
			$correo=$dato['correo'];
		}
		$dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
		$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
 		$hoy=$dias[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y');
		$fech=date('d')."".$meses[date('n')-1]."".date('y');
		//Salida: Viernes 24 de Febrero del 2012

$codigoHTML=' 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Reporte</title>
<style type="text/css">
.text {
	font-family: Verdana, Geneva, sans-serif;
	font-size: 12px;
}
</style>
</head>

<body>
<div align="center">
<table width="100%" border="0">
<caption class="text">
<strong>Reporte de Ventas</strong>
</caption>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td width="17"><center><img src="img/logo.png" width="114" height="65" alt="" /></center></td>
    <td width="83%" colspan="2">
      <div align="center">
        <span class="text">'.$empresa.'</span> <span class="text">RFC.'.$nit.'</span><br />
        <span class="text">Ciudad: '.$empresa.''." ".' Direccion: '.$direccion.'. </span><br />
        <span class="text">TEL: '.$tel1.' CEL: '.$tel2.'</span><br />
        <span class="text">Reporte Impreso el '.$hoy.' por '.$_SESSION['username'].'</span>
      </div>
    </td>
  </tr>
</table><br />
<table width="100%" border="1">
  <tr>
    <td width="3%" bgcolor="#A4DBFF"><strong class="text">Factura</strong></td>
    <td width="11%" bgcolor="#A4DBFF"><strong class="text">Nombre</strong></td>
    <td width="12%" bgcolor="#A4DBFF"><strong class="text">Cantidad</strong></td>
    <td width="8%" bgcolor="#A4DBFF"><strong class="text">Valor</strong></td>
    <td width="10%" bgcolor="#A4DBFF"><strong class="text">Importe</strong></td>
	<td width="18%" bgcolor="#A4DBFF"><strong class="text">Vendedor</strong></td>
	<td width="10%" bgcolor="#A4DBFF"><strong class="text">Fecha</strong></td>
    </tr>'; 
  	$num=0;
	if(!empty($_POST['fecha']) and !empty($_POST['usuario'])){
		$can=mysql_query("SELECT detalle.factura, detalle.nombre, detalle.cantidad, detalle.valor, detalle.importe, factura.cajera, factura.fecha 
	FROM detalle, factura where (factura.factura=detalle.factura and factura.fecha = '$fechaR') and factura.cajera = '$nombre'");
	$can1=mysql_query("SELECT  sum(detalle.importe) AS total
	FROM detalle, factura where (factura.factura=detalle.factura and factura.fecha = '$fechaR') and factura.cajera = '$nombre'");
	
	while($dato=mysql_fetch_array($can1)){$total=$dato['total'];}
	while($dato=mysql_fetch_array($can)){
		$factura= $dato['factura'];
		$nombre = $dato['nombre'];
		$cantidad= $dato['cantidad'];
		$valor= $dato['valor'];
		$importe= $dato['importe'];
		$cajera= $dato['cajera'];
		$fecha= $dato['fecha'];
		$num=$num+1;
		$resto = $num%2; 
  		if ((!$resto==0)) { 
        	$color="#CCCCCC"; 
   		}else{ 
        	$color="#FFFFFF";
   		}
		
$codigoHTML.='
  <tr>
    <td bgcolor="'.$color.'"><center><span class="text">'.$factura.'</span></center></td>
    <td bgcolor="'.$color.'"><span class="text">'.$nombre.'</span></td>
    <td bgcolor="'.$color.'"><span class="text">'.$cantidad.'</span></td>
    <td bgcolor="'.$color.'"><span class="text">$ '.number_format($valor,2,".",",").'</span></td>
    <td bgcolor="'.$color.'"><span class="text">$ '.number_format($importe,2,".",",").'</span></td>
	<td bgcolor="'.$color.'"><span class="text">'.$cajera.'</span></td>
	<td bgcolor="'.$color.'"><span class="text">'.$fecha.'</span></td>
  </tr>
';
  }
  $codigoHTML.='
  <tr>
    <td bgcolor="'.$color.'"><center><span class="text"></span></center></td>
    <td bgcolor="'.$color.'"><span class="text"></span></td>
    <td bgcolor="'.$color.'"><span class="text"></span></td>
    <td bgcolor="'.$color.'"><span class="text">Total: </span></td>
    <td bgcolor="'.$color.'"><span class="text">$ '.number_format($total,2,".",",").'</span></td>
	<td bgcolor="'.$color.'"><span class="text"></span></td>
	<td bgcolor="'.$color.'"><span class="text"></span></td>
  </tr>
';
 
  }else{$can=mysql_query("SELECT detalle.factura, detalle.nombre, detalle.cantidad, detalle.valor, detalle.importe, factura.cajera, factura.fecha 
	FROM detalle, factura where (factura.factura=detalle.factura and factura.fecha = '$fechaR')");	
		$can1=mysql_query("SELECT  sum(detalle.importe) AS total
	FROM detalle, factura where (factura.factura=detalle.factura and factura.fecha = '$fechaR')");
	while($dato=mysql_fetch_array($can1)){$total=$dato['total'];}
	while($dato=mysql_fetch_array($can)){
		$factura= $dato['factura'];
		$nombre = $dato['nombre'];
		$cantidad= $dato['cantidad'];
		$valor= $dato['valor'];
		$importe= $dato['importe'];
		$cajera= $dato['cajera'];
		$fecha= $dato['fecha'];
		
		$num=$num+1;
		$resto = $num%2; 
  		if ((!$resto==0)) { 
        	$color="#CCCCCC"; 
   		}else{ 
        	$color="#FFFFFF";
   		}
		
$codigoHTML.='
  <tr>
    <td bgcolor="'.$color.'"><center><span class="text">'.$factura.'</span></center></td>
    <td bgcolor="'.$color.'"><span class="text">'.$nombre.'</span></td>
    <td bgcolor="'.$color.'"><span class="text">'.$cantidad.'</span></td>
    <td bgcolor="'.$color.'"><span class="text">$ '.number_format($valor,2,".",",").'</span></td>
    <td bgcolor="'.$color.'"><span class="text">$ '.number_format($importe,2,".",",").'</span></td>
	<td bgcolor="'.$color.'"><span class="text">'.$cajera.'</span></td>
	<td bgcolor="'.$color.'"><span class="text">'.$fecha.'</span></td>
  </tr>';
  }
    $codigoHTML.='
  <tr>
    <td bgcolor="'.$color.'"><center><span class="text"></span></center></td>
    <td bgcolor="'.$color.'"><span class="text"></span></td>
    <td bgcolor="'.$color.'"><span class="text"></span></td>
    <td bgcolor="'.$color.'"><span class="text">Total: </span></td>
    <td bgcolor="'.$color.'"><span class="text">$ '.number_format($total,2,".",",").'</span></td>
	<td bgcolor="'.$color.'"><span class="text"></span></td>
	<td bgcolor="'.$color.'"><span class="text"></span></td>
  </tr>
';
  }
$codigoHTML.='
</table><br />
<div align="right"><span class="text">Registros Encontrados '.$num.'</span></div>
</div>
</body>
</html>';

$codigoHTML=utf8_decode($codigoHTML);
$dompdf=new DOMPDF();
$dompdf->load_html($codigoHTML);
ini_set("memory_limit","128M");
$dompdf->render();
$dompdf->stream("Listado_Ventas_".$fech.".pdf");
?>