<?php if (isset($_SESSION['CCT'])&&$_SESSION['CCT']=="DIREDUIXTA") {
	$respuesta_super = $con->seSupervisiones();
	} else {
	inicio();
}
?>
	<h3>Supervisiones</h3>
	<table border="1px" align="center" style="width: 90%;">
	    <tr class="label-success" bgcolor="#00AA00">
	      <th>CCT</th>
		  <th>Sede</th>
		  <th>Oficina</th>
		  <th>Escuelas</th>
		  <th>Grupos</th>
		  <th>Alumnos</th>
		  <th>Zona</th>
		  <th>Subsistema</th>
	    </tr>
	    <?php while ($resultados_row = $con->fetch_array($respuesta_super)) {
		    print('
		    	<tr>
		            <td style="width: 15%; text-align: left;">'.$resultados_row['cct'].'</td>
					<td style="width: 15%; text-align: left;">'.$resultados_row['sede'].'</td>
					<td style="width: 15%; text-align: left;">'.$resultados_row['oficina'].'</td>
					<td style="width:  9%; text-align: left;">'.$resultados_row['num_escuelas'].'</td>
					<td style="width:  9%; text-align: left;">'.$resultados_row['num_grupos'].'</td>
					<td style="width:  9%; text-align: left;">'.$resultados_row['num_alumnos'].'</td>
					<td style="width:  9%; text-align: left;">'.$resultados_row['zona'].'</td>
					<td style="width: 11%; text-align: left;">'.$resultados_row['subsistema'].'</td>
	            </tr>
			');
		}
	?>
	</table>


