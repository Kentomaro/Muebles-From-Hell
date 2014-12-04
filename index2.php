<?php 
require 'controlador/ctrl.login.php';

$login = new ctrl_login();

if(isset($_POST['usuario']) && isset($_POST['contra']))
{

$login->acceso($_POST['usuario'],$_POST['contra']);

}
else
{

$login->principal();
}
?>