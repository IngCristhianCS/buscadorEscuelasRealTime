<?php
$zona = $_POST['valor'];
$respuesta = $con->seZonaT($zona);
while ($resultados_row = $con->fetch_array($respuesta)) {
    print('
	    	<tr id="Zona'.$resultados_row['id_zona'].'">
	            <td d-c="Zona">'.$resultados_row['zona'].'</td>
				<td d-c="Nivel">'.$resultados_row['nivel'].'</td>
				<td d-c="Subsistema">'.$resultados_row['subsistema'].'</td>
				<td d-c="Actualizar"><a href="http://'.$_SERVER['SERVER_ADDR'].'/ixtapaluca/frm/Zona/'.$resultados_row['id_zona'].'"><img src="http://'.$_SERVER['SERVER_ADDR'].'/ixtapaluca'.'/images/actualizar.png" class="ifo" title="Actualizar" alt=""></a></td>
	            <td d-c="Eliminar"><a href="#" onclick="eliminarZona(\''.$resultados_row['id_zona'].'\',\''.$resultados_row['zona'].'\')"><img src="http://'.$_SERVER['SERVER_ADDR'].'/ixtapaluca'.'/images/eliminar.png" class="ifo" title="Eliminar" alt=""></a></td>
	        </tr>
		');
}
?>