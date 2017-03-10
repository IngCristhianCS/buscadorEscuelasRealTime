<?php
if (isset($_GET['a'])&&isset($_SESSION['TIPO_USUARIO'])) {
	if ($_GET['a']=="reg"&&$_SESSION['TIPO_USUARIO']=='administrador') {
		if (isset($_POST["cct"]) && isset($_POST["sede"]) && isset($_POST["oficina"]) && isset($_POST["num_grupos"])
		 && isset($_POST["num_escuelas"]) && isset($_POST["num_alumnos"]) && isset($_POST["id_zona"])) {
			$res = $con->inSupervision($_POST["cct"],$_POST["sede"],$_POST["oficina"],$_POST["num_grupos"],$_POST["num_escuelas"],$_POST["num_alumnos"], $_POST["id_zona"]);
			if ($res!=false) {
				msjCorrecto('Registro Correcto De la Supervision con CCT'.$_POST["cct"],'Supervision',$_POST["cct"],$_GET['a']);
			} else {
				msjError('http://'.$_SERVER['SERVER_ADDR'].'/ixtapaluca'.'/frm/Supervision');
			}
		} else {
			msjError('http://'.$_SERVER['SERVER_ADDR'].'/ixtapaluca'.'/frm/Supervision');
		}
	}else if ($_GET['a']=="act") {
		if (isset($_POST["cct"]) && isset($_POST["sede"]) && isset($_POST["oficina"]) && isset($_POST["num_grupos"])
		 && isset($_POST["num_escuelas"]) && isset($_POST["num_alumnos"]) && isset($_POST["id_zona"])) {
			$res = $con->acSupervision($_POST["cct"],$_POST["sede"],$_POST["oficina"],$_POST["num_escuelas"],$_POST["num_grupos"],$_POST["num_alumnos"], $_POST["id_zona"],$_POST["cct_antiguo"]);
			if ($res!=false) {
				msjCorrecto('Actualizado Correctamente','Supervision',$_POST["cct"],$_GET['a']);
			} else {
				msjError('http://'.$_SERVER['SERVER_ADDR'].'/ixtapaluca'.'/frm/Supervision/'.$_POST["cct"]);
			}
		} else {
			msjError('http://'.$_SERVER['SERVER_ADDR'].'/ixtapaluca'.'/frm/Supervision/'.$_POST["cct"]);
		}
	}else if ($_GET['a']=="eli"&&$_SESSION['TIPO_USUARIO']=='administrador') {
		$res = $con->elSupervision($_GET['c']);
		if ($res!=false) {
			msjCorrecto('Eliminado Correctamente','Supervision',$_GET["c"],$_GET['a']);
		} else {
			msjError('http://'.$_SERVER['SERVER_ADDR'].'/ixtapaluca'.'/tbl/Supervision');
		}
	} else{
		inicio();
	}
} else {
	inicio();
}
?>