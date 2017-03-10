<?php if (isset($_SESSION['TIPO_USUARIO'])) {
	$pass = $_GET['fieldValue'];
	$respuesta=$con->seSupervision($_SESSION['CCT']);
	$resultados_row=$con->fetch_array($respuesta);
	if ($resultados_row['password']==$con->MRES(md5($pass))) {
		echo json_encode(array("contrasenia",true));
	} else {
		echo json_encode(array("contrasenia",false));
	}
}
?>