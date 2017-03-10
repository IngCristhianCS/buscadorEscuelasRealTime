<?php
if (isset($_GET['a'])) {
	if ($_GET['a']=='reg') {
		if ( isset($_POST["cct"]) && isset($_POST["sueldo"])) {
			$res = $con->inPerEsc($_GET["r"], $_POST["cct"], $_POST["sueldo"]);
			if ($res!=false) {
				msjCorrecto('Registro Exitoso','personalEsc',$_GET['r'],$_GET['a']);
			} else {
				msjError('http://'.$_SERVER['SERVER_ADDR'].'/ixtapaluca'.'/personalEsc/'.$_GET['r']);
			}
		} else {
			msjError('http://'.$_SERVER['SERVER_ADDR'].'/ixtapaluca'.'/personalEsc/'.$_GET['r']);
		}
	}else if ($_GET['a']=="act") {
		$res = $con->acPerEsc($_GET["r"], $_POST["cct"], $_POST["sueldo"],$_GET["c"]);
		if ($res!=false) {
			msjCorrecto('Actualizado Correctamente','personalEsc',$_GET['r'],$_GET['a']);
		} else {
			msjError('http://'.$_SERVER['SERVER_ADDR'].'/ixtapaluca'.'/personalEsc/'.$_GET['r']);
		}
	}else if ($_GET['a']=="eli") {
		$res = $con->elPerEsc($_GET["f"],$_GET["c"]);
		if ($res!=false) {
			msjCorrecto('Eliminado Correctamente','personalEsc',$_GET['f'],$_GET['a']);
		} else {
			msjError('http://'.$_SERVER['SERVER_ADDR'].'/ixtapaluca'.'/personalEsc/'.$_GET['f']);
		}
	} else{
		inicio();
	}
} else {
	inicio();
}
?>