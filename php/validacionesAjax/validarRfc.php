<?php if (isset($_SESSION['TIPO_USUARIO'])&&$_SESSION['TIPO_USUARIO']=='administrador') {
	$rfc  = $_GET['fieldValue'];
	$rfc_m= $_GET['rfc_m'];
	if ($rfc==$rfc_m) {
		print json_encode(array("rfc",true));
	} else {
		$respuesta=$con->sePersona($rfc);
		if ($con->num_rows($respuesta)>0) {
			print json_encode(array("rfc",false));
		} else {
			print json_encode(array("rfc",true));
		}
	}
}
?>