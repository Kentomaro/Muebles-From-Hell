<?php
		include('session.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $titulo; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link href="css/docs.css" rel="stylesheet">
    <link href="js/google-code-prettify/prettify.css" rel="stylesheet">
    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
	<script src="js/jquery.js"></script>
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/bootstrap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-carousel.js"></script>
    <script src="js/bootstrap-typeahead.js"></script>
    <script src="js/bootstrap-affix.js"></script>
    <script src="js/holder/holder.js"></script>
    <script src="js/google-code-prettify/prettify.js"></script>
    <script src="js/application.js"></script>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="ico/favicon.ico"/>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
body {
	background-color: #FFF;
	background-image: url(img/fondoP.jpg);
}
</style>
</head>
<body data-spy="scroll" data-target=".bs-docs-sidebar">
<div align="center">
<h1 style="color:#FFFFFF">Muebles From Hell</h1>
<table width="80%" border="0">
  <tr>
    <td>
    <div id="navbar-example" class="navbar navbar-static">
      <div class="navbar-inner">
        <div class="container" style="width: auto;">
<!--          <a class="brand" href="empresa.php" target="admin">Administrador</a>
-->          <a class="brand" href="caja.php?ddes=0" target="admin">Ventas</a>
         <ul class="nav" role="navigation">
             <li class="dropdown">
              <!--<a id="drop1" href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Clientes <b class="caret"></b></a>-->
              <ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="clientes.php" target="admin">Buscar Clientes</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="crear_clientes.php" target="admin">Crear Clientes</a></li>
              <!--  <li role="presentation" class="divider"></li>-->
              </ul>
            </li>
            <li class="dropdown">
              <!--<a href="#" id="drop2" role="button" class="dropdown-toggle" data-toggle="dropdown">Inventarios<b class="caret"></b></a>
              --><ul class="dropdown-menu" role="menu" aria-labelledby="drop2">
              	<li role="presentation"><a role="menuitem" tabindex="-1" href="producto.php" target="admin">Buscar Producto</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="crear_producto.php" target="admin">Crear Producto</a></li>
                <li role="presentation" class="divider"></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="proveedor.php" target="admin">Buscar Proveedor</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="crear_proveedor.php" target="admin">Crear Proveedor</a></li>
              </ul>
            </li>
            
            <li class="dropdown">
              <!--<a href="#" id="drop2" role="button" class="dropdown-toggle" data-toggle="dropdown">Reportes<b class="caret"></b></a>
              --><ul class="dropdown-menu" role="menu" aria-labelledby="drop2">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="PDFclientes.php" target="admin"><i class="icon-th-list"></i> 
                Listado de Usuarios</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="PDFproveedores.php" target="admin"><i class="icon-th-list"></i> 
                Listados de Proveedores</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="PDFproducto.php" target="admin"><i class="icon-th-list"></i> 
                Listado de Productos</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="PDFestado_inventario.php" target="admin"><i class="icon-th-list"></i> 
                Estado de Inventario</a></li>
               <!--  <li role="presentation" class="divider"></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="conceptos.php" target="admin">Administrar Conceptos</a></li>-->
              </ul>
            </li>
          </ul>
          <ul class="nav pull-right">
            <li id="fat-menu" class="dropdown">
              <a href="#" id="drop3" role="button" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-user"></i> Bienvenido! <?php echo $_SESSION['nom']; ?> <b class="caret"></b></a>
              <ul class="dropdown-menu" role="menu" aria-labelledby="drop3">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="cambiar_clave.php" target="admin"><i class="icon-refresh"></i> Cambiar Contraseña</a></li>
                <li role="presentation" class="divider"></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="php_cerrar.php"><i class="icon-off"></i> LogOut</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>    </td>
  </tr>
  <tr >
    <td ><div style="padding:0px;webkit-border-radius: 20px;-moz-border-radius: 20px;border-radius: 20px;margin:0 auto;overflow:hidden;">
      <iframe  src="caja.php?ddes=0" frameborder="0" scrolling="auto" name="cajero" width="100%" height="500"></iframe>
    </div></td>
  </tr>
  <tr>
    <td>
    <pre><center><strong><a href="" target="_blank" style="color:#000">Muebles From Hell <?php echo date("Y"); ?></a></strong></center></pre>    </td>
  </tr>
</table>
</body>
</html>