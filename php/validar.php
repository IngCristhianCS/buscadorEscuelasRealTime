<?php
include ($_SERVER['DOCUMENT_ROOT'].'/ixtapaluca'.'/php/includes/sesion.php');
include($_SERVER['DOCUMENT_ROOT'].'/ixtapaluca'.'/clases/FuncionesSQL.php');
include($_SERVER['DOCUMENT_ROOT'].'/ixtapaluca'.'/clases/controladores.php');
if (isset($_GET['c'])) {
	validar($_GET['c']);
}
?>