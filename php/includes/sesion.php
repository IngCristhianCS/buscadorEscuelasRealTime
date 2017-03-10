<?php
session_start();
ini_set('date.timezone','America/Mexico_City');
/*if (isset($_SESSION['INICIO'])) {
	$fin=time()-$_SESSION['INICIO'];
	if ($fin>1200) {
		print ('<script>alert("Por Seguridad Tu Sesion Caduco Por Estar Inactiva '.gmdate("H:i:s", $fin).' ");</script>');
		session_destroy();
		print ("<script>window.location = 'inicio' </script>");
	}else{
		$_SESSION['INICIO']=time();
	}
}*/
?>