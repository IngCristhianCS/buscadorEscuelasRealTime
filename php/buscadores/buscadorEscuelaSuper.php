<?php
$valor = $_POST['valor'];
$respuesta = $con->seEscuelaBusc("cct",$valor);
if (isset($_SESSION['TIPO_USUARIO'])) {
	$num=$con->num_rows($respuesta);
	if ($num==1) {
		$resultados_row = $con->fetch_array($respuesta);
		print('<td d-c="CCT">'.$resultados_row['cct'].'</td><td d-c="Nombre">'.$resultados_row['nombre'].'</td><td d-c="Director">'.$resultados_row['director'].'</td><td d-c="Subdirector">'.$resultados_row['subdirector'].'</td><td d-c="Subsistema">'.$resultados_row['subsistema'].'</td><td d-c="Org Social">'.$resultados_row['org_social'].'</td><td d-c="Turno">'.$resultados_row['turno'].'</td><td d-c="Codigo Postal">'.$resultados_row['codigo_postal'].'</td><td d-c="Asentamiento">'.$resultados_row['nom_asentamiento'].'</td><td d-c="Act.Ubicacion"><a href="http://'.$_SERVER['SERVER_ADDR'].'/ixtapaluca/frm/Ubicacion/'.$resultados_row['cct'].'"><img src="http://'.$_SERVER['SERVER_ADDR'].'/ixtapaluca'.'/images/actualizarUbica.png" class="ifo"></a></td><td d-c="Contacto"><a href="http://'.$_SERVER['SERVER_ADDR'].'/ixtapaluca/detalles/'.$resultados_row['cct'].'"><img src="http://'.$_SERVER['SERVER_ADDR'].'/ixtapaluca'.'/images/mapa.jpg" class="ifo"></a></td><td d-c="Actualizar"><a href="http://'.$_SERVER['SERVER_ADDR'].'/ixtapaluca/frm/Escuela/'.$resultados_row['cct'].'"><img src="http://'.$_SERVER['SERVER_ADDR'].'/ixtapaluca'.'/images/actualizar.png" class="ifo"></a></td><td d-c="Eliminar"><a href="#" onclick="eliminarEscuela(\''.$resultados_row['cct'].'\')"><img src="http://'.$_SERVER['SERVER_ADDR'].'/ixtapaluca'.'/images/eliminar.png" class="ifo"></a></td>');
	} else {
		print 0;
	}
}
?>