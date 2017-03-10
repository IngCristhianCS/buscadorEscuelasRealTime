<?php
$con=new FuncionesSql();
if (isset($_GET['p'])) {
	if ($_GET['p']=="ingresar") {
		if (isset($_POST["usuario"])&&isset($_POST["pass"])) {
			$respuesta = $con->seLogueo($_POST["usuario"],$_POST["pass"]);
			$num=$con->num_rows($respuesta);
			if ($num==1) {
				$resultados_row           =$con->fetch_array($respuesta);
				$_SESSION['ZONA']         =$resultados_row['zona'];
				$_SESSION['TIPO_USUARIO'] =$resultados_row['tipo_usuario'];
				$_SESSION['CCT']          =$resultados_row['cct'];
				$_SESSION['INICIO']       = time();
				$_SESSION['USUARIO']      ="Supervision ".$resultados_row['zona'];
				msjBienvenido();
			}else{
				msjError('inicio');
			}
		}else{
			inicio();
		}
	}
}
?>