<?php
if (isset($_GET['a'])) {
	if ($_GET['a']=="reg") {
		if (isset($_POST["zona"])) {
			$res = $con->inZona($_POST["zona"],$_POST["id_nivel"],$_POST["subsistema"]);
			if ($res!=false) {
				$respuesta = $con->seZonaNom($_POST["zona"]);
				$resultados_row = $con->fetch_array($respuesta);
				msjCorrecto('Registro la Zona '.$_POST["zona"],'Zona',$resultados_row['id_zona'],$_GET['a']);
			} else {
				msjError('http://'.$_SERVER['SERVER_ADDR'].'/ixtapaluca'.'/frm/Zona');
			}
		} else {
			redirigir('/frm/Zona');
		}
	}else if ($_GET['a']=="act") {
		if (isset($_POST["id_zona"])) {
			$res = $con->acZona($_POST["id_zona"],$_POST["zona"],$_POST["id_nivel"],$_POST["subsistema"]);
			if ($res!=false) {
				msjCorrecto("Actualizo la Zona ".$_POST["zona"],'Zona',$_POST["id_zona"],$_GET['a']);
			} else {
				msjError('http://'.$_SERVER['SERVER_ADDR'].'/ixtapaluca'.'/frm/Zona/'.$_POST["id_zona"]);
			}
		} else {
			redirigir('/frm/Zona');
		}

	}else if ($_GET['a']=="eli") {
			$res = $con->elZona($_GET["c"]);
			if ($res!=false) {
				msjCorrecto('Eliminado Correctamente la Zona '.$_GET["c"],'Zona',$_GET["c"],$_GET['a']);
			} else {
				msjError('http://'.$_SERVER['SERVER_ADDR'].'/ixtapaluca'.'/tbl/Zona');
			}
	} else{

	}

} else {

}
?>