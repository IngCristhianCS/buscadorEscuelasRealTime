<?php
$campo = $_POST['campo'];
$valor = $_POST['valor'];
$respuesta = $con->seSupervisionBusc($campo,$valor);
if (isset($_SESSION['TIPO_USUARIO'])&&$_SESSION['TIPO_USUARIO']=='administrador') {
	while ($resultados_row = $con->fetch_array($respuesta)) {
	    print('
    	<tr id="Supervision'.$resultados_row['cct'].'">
            <td d-c="CCT">'.$resultados_row['cct'].'</td>
			  <td d-c="Sede">'.$resultados_row['sede'].'</td>
			  <td d-c="Oficina">'.$resultados_row['oficina'].'</td>
			  <td d-c="Escuelas">'.$resultados_row['num_escuelas'].'</td>
			  <td d-c="Grupos">'.$resultados_row['num_grupos'].'</td>
			  <td d-c="Alumnos">'.$resultados_row['num_alumnos'].'</td>
			  <td d-c="Zona">'.$resultados_row['zona'].'</td>
			  <td d-c="Actualizar"><a href="http://'.$_SERVER['SERVER_ADDR'].'/ixtapaluca/frm/Supervision/'.$resultados_row['cct'].'"><img src="http://'.$_SERVER['SERVER_ADDR'].'/ixtapaluca'.'/images/actualizar.png" class="ifo" title="Actualizar" alt=""></a></td>
              <td d-c="Eliminar"><a href="#" onclick="eliminarSupervision(\''.$resultados_row['cct'].'\')"><img src="http://'.$_SERVER['SERVER_ADDR'].'/ixtapaluca'.'/images/eliminar.png" class="ifo" title="Eliminar" alt=""></a></td>
        </tr>
		');
	}
}

?>