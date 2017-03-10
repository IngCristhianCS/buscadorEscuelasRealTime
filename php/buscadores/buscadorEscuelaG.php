<?php
$campo = $_POST['campo'];
$valor = $_POST['valor'];
$respuesta = $con->seEscuelaBuscG($campo,$valor);
while ($resultados_row = $con->fetch_array($respuesta)) {
	if (isset($_POST['socket'])) {
		print('<td d-c="CCT">'.$resultados_row['cct'].'</td><td d-c="Nombre">'.$resultados_row['nombre'].'</td><td d-c="Telefono(s)">'.$resultados_row['telefono'].'</td><td d-c="Zona">'.$resultados_row['zona'].'</td><td d-c="Detalles"><a href="http://'.$_SERVER['SERVER_ADDR'].'/ixtapaluca/detalles/'.$resultados_row['cct'].'"><img src="http://'.$_SERVER['SERVER_ADDR'].'/ixtapaluca'.'/images/mapa.jpg" class="ifo"></a></td>');
	} else if(isset($_POST['nombre'])){
		print $resultados_row['nombre'];
	}else {
		print('<tr id="EscuelaG'.$resultados_row['cct'].'">
                <td d-c="CCT">'.$resultados_row['cct'].'</td><td d-c="Nombre">'.$resultados_row['nombre'].'</td><td d-c="Telefono(s)">'.$resultados_row['telefono'].'</td><td d-c="Zona">'.$resultados_row['zona'].'</td><td d-c="Detalles"><a href="http://'.$_SERVER['SERVER_ADDR'].'/ixtapaluca/detalles/'.$resultados_row['cct'].'"><img src="http://'.$_SERVER['SERVER_ADDR'].'/ixtapaluca'.'/images/mapa.jpg" class="ifo"></a></td></tr>');
	}
}
?>