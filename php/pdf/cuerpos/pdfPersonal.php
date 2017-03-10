<?php if (isset($_SESSION['CCT'])&&$_SESSION['CCT']=="DIREDUIXTA") {
	$respuesta_super = $con->sePerEsc();
	} else {
	inicio();
}
?>
	<h3>Empleados</h3>
	<table border="1px" align="center" style="width: 90%;">
	    <tr class="label-success" bgcolor="#00AA00">
	      <th>RFC</th>
		  <th>Nombre</th>
		  <th>Sueldo</th>
		  <th>CCT Escuela</th>
		  <th>Nombre</th>
	    </tr>
	    <?php while ($resultados_row = $con->fetch_array($respuesta_super)) {
		    print('
		    	<tr>
		            <td style="width: 15%; text-align: left;">'.$resultados_row['rfc'].'</td>
					<td style="width: 15%; text-align: left;">'.$resultados_row['nombre'].' '.$resultados_row['a_paterno'].' '.$resultados_row['a_materno'].'</td>
					<td style="width: 15%; text-align: left;">'.$resultados_row['sueldo'].'</td>
					<td style="width:  15%; text-align: left;">'.$resultados_row['cct'].'</td>
					<td style="width:  25%; text-align: left;">'.$resultados_row['nombre_e'].'</td>
	            </tr>
			');
		}
	?>
	</table>