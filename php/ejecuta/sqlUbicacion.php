<?php
if (isset($_GET['a'])&&isset($_SESSION['TIPO_USUARIO'])) {
	if ($_GET['a']=="act") {
		if (isset($_POST['cct']) && isset($_POST['latitud']) && isset($_POST['longitud']) &&
			isset($_POST['heading']) && isset($_POST['pitch']) &&
			isset($_POST['direccion'])  && isset($_POST['id_asentamiento'])) {
			$res = $con->acUbicacion($_POST['cct'] ,$_POST['latitud'] ,$_POST['longitud'] ,
			$_POST['heading'] ,$_POST['pitch'] ,$_POST['direccion'],$_POST['id_asentamiento'] );
			if ($res!=false) {
				msjCorrecto('Ubicacion de la Escuela con CCT '.$_POST['cct'],"Ubicacion",$_POST['cct'],$_GET['a']);
			} else {
				redirigir('/frm/Ubicacion/'.$_POST['cct']);
			}
		} else {
			redirigir('/frm/Ubicacion');
		}
	}else if ($_GET['a']=="eli") {
		$res = $con->elUbicacion($_GET['c']);
		if ($res!=false) {
			msjCorrecto('Eliminado Correctamente',"Ubicacion",$_GET['c'],$_GET['a']);
		} else {
			msjError('http://'.$_SERVER['SERVER_ADDR'].'/ixtapaluca'.'/tbl/Ubicacion');
		}
	} else{
		inicio();
	}
} else {
	inicio();
}
?>