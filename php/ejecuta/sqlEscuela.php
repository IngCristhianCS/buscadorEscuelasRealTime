<?php
if (isset($_GET['a'])&&isset($_SESSION['TIPO_USUARIO'])) {
	if (isset($_POST["cct"])&& isset($_POST["nombre"])&& isset($_POST["director"])
		&& isset($_POST["id_turno"])&& isset($_POST["telefono"])
		&& isset($_POST["email"])){
		if ($_GET['a']=="reg") {
			$res = $con->inEscuela($_POST["cct"],$_POST["nombre"],$_POST["director"],
				$_POST["subdirector"],$_POST["id_turno"]
				,$_POST["telefono"], $_POST["email"], $_POST['orgsoc'],$_POST['id_zona']);
			if ($res!=false) {
				$res= $con->inUbicacion($_POST["cct"]);
				msjCorrecto('Registro Escuela Correctamente','Escuela',$_POST["cct"],$_GET['a']);
			} else {
				msjError('http://'.$_SERVER['SERVER_ADDR'].'/ixtapaluca'.'/frm/Escuela');
			}
		}else if ($_GET['a']=="act") {
			$res = $con->acEscuela($_POST["cct"],$_POST["nombre"],$_POST["director"],
				$_POST["subdirector"],$_POST["id_turno"]
				,$_POST["telefono"], $_POST["email"], $_POST['orgsoc'],$_POST['id_zona'],$_POST['cct_mod']);

			if ($res!=false) {
				msjCorrecto('Actualizo Escuela Correctamente','Escuela',$_POST["cct"],$_GET['a']);
			} else {
				msjError('http://'.$_SERVER['SERVER_ADDR'].'/ixtapaluca'.'/frm/Escuela/'.$_POST["cct"]);
			}

		}
	}
	if ($_GET['a']=="eli") {
		$res = $con->elEscuela($_GET['c']);
		if ($res!=false) {
			msjCorrecto('Eliminado Correctamente','Escuela',$_GET["c"],$_GET['a']);
		} else {
			msjError('tbl/Escuela');
		}
	}
} else {
	inicio();
}
?>