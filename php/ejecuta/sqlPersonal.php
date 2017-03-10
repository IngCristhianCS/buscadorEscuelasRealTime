<?php
if (isset($_GET['a'])) {
	if ($_GET['a']=="reg") {
		if (isset($_POST["nombre"]) && isset($_POST["app"]) && isset($_POST["apm"]) && isset($_POST["rfc"])&& isset($_POST["id_funcion"])) {
			$res = $con->inPersonal($_POST["nombre"], $_POST["app"], $_POST["apm"], $_POST["rfc"],$_POST["id_funcion"]);
			if ($res!=false) {
				msjCorrecto('Registro Correcto','Personal',$_POST["rfc"],$_GET['a']);
			} else {
				msjError('http://'.$_SERVER['SERVER_ADDR'].'/ixtapaluca'.'/frm/Personal');
			}
		} else {
			msjError('http://'.$_SERVER['SERVER_ADDR'].'/ixtapaluca'.'/frm/Personal');
		}
	}else if ($_GET['a']=="act") {
		$res = $con->acPersonal($_POST["nombre"], $_POST["app"], $_POST["apm"], $_POST["rfc"],$_POST["id_funcion"],$_POST["rfc"]);
		if ($res!=false) {
			msjCorrecto('Actualizado Correctamente','Personal',$_POST["rfc"],$_GET['a']);
		} else {
			msjError('http://'.$_SERVER['SERVER_ADDR'].'/ixtapaluca'.'/tbl/Personal');
		}
	}else if ($_GET['a']=="eli") {
		$res = $con->elPersonal($_GET['c']);
		if ($res!=false) {
			msjCorrecto('Eliminado Correctamente','Personal',$_GET["c"],$_GET['a']);
		} else {
			msjError('http://'.$_SERVER['SERVER_ADDR'].'/ixtapaluca'.'/tbl/Personal');
		}
	} else{
		inicio();
	}
} else {
	inicio();
}
?>