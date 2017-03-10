<?php
$campo = $_POST['campo'];
$valor = $_POST['valor'];
$respuesta = $con->sePersonalBusc($campo,$valor);
if (isset($_SESSION['TIPO_USUARIO'])) {
	while ($resultados_row = $con->fetch_array($respuesta)) {
	    print('
		    	<tr id="Personal'.$resultados_row['rfc'].'">
		            <td d-c="RFC">'.$resultados_row['rfc'].'</td>
					  <td d-c="Nombre(s)">'.$resultados_row['nombre'].'</td>
					  <td d-c="Apellido Paterno">'.$resultados_row['a_paterno'].'</td>
					  <td d-c="Apellido Materno">'.$resultados_row['a_materno'].'</td>
					  <td d-c="Funcion">'.$resultados_row['funcion'].'</td>
		              <td d-c="Administrar Escuelas"><a href="http://'.$_SERVER['SERVER_ADDR'].'/ixtapaluca/personalEsc/'.$resultados_row['rfc'].'" id="btnPersonalEsc" tabla="PersonalEsc"><img src="http://'.$_SERVER['SERVER_ADDR'].'/ixtapaluca/images/actualizarEsc.png" class="ifo" title="Administrar Escuelas" alt=""></a></td>
		              <td d-c="Actualizar"><a href="http://'.$_SERVER['SERVER_ADDR'].'/ixtapaluca/frm/Personal/'.$resultados_row['rfc'].'"><img src="http://'.$_SERVER['SERVER_ADDR'].'/ixtapaluca'.'/images/actualizar.png" class="ifo" title="Actualizar" alt=""></a></td>
		              <td d-c="Eliminar"><a href="#" onclick="eliminarPersonal(\''.$resultados_row['rfc'].'\')"><img src="http://'.$_SERVER['SERVER_ADDR'].'/ixtapaluca'.'/images/eliminar.png" class="ifo" title="Eliminar" alt=""></a></td>
		        </tr>
			');
	}
}
?>