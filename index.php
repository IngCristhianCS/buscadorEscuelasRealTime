<?php
include ($_SERVER['DOCUMENT_ROOT'].'/ixtapaluca'.'/php/includes/sesion.php');
include ($_SERVER['DOCUMENT_ROOT'].'/ixtapaluca'.'/clases/FuncionesSql.php');
include ($_SERVER['DOCUMENT_ROOT'].'/ixtapaluca'.'/clases/controladores.php');
include ($_SERVER['DOCUMENT_ROOT'].'/ixtapaluca'.'/clases/MensajesOtros.php');
if (isset($_GET['p'])) {
	if ($_GET['p']=="pdf"){
		cuerpoPDF();
	} else if ($_GET['p']=="excel"){
		cuerpoexcel();
	}else{
		cuerpoPrincipal($_GET['p']);
	}
}else {
	inicio();
}
