<?php if (isset($_SESSION['CCT'])) {
	if ($_SESSION['CCT']=="DIREDUIXTA") {
		$respuesta_super = $con->seSupervisiones();
	} else {
		$respuesta_super = $con->seSupervision($_SESSION['CCT']);
	}
	while ($resultados_super = $con->fetch_array($respuesta_super)) {
		print('
			<h2 align="center">Supervision</h2>
			<table align="center" style="width: 90%;" border="1px">
		    	<tr>
		    		<th style="width: 25%; text-align: left; background-color:#00AA00;">CCT:</th>
		    		<td style="width: 25%; text-align: left;">'.$resultados_super['cct'].'</td>
		    		<th style="width: 25%; text-align: left; background-color:#00AA00;">Zona:</th>
		    		<td style="width: 25%; text-align: left;">'.$resultados_super['zona'].'</td>
		    	</tr>
		    	<tr>
		    		<th style="width: 25%; text-align: left; background-color:#00AA00;">Sede:</th>
		    		<td style="width: 25%; text-align: left;">'.$resultados_super['sede'].'</td>
		    		<th style="width: 25%; text-align: left; background-color:#00AA00;">Subsistema:</th>
		    		<td style="width: 25%; text-align: left;">'.$resultados_super['subsistema'].'</td>
		    	</tr>
		    </table><br><br>
		');
	?>
	<h3>Escuelas</h3>
	<table border="1px" align="center" style="width: 90%;">
	    <tr class="label-success" bgcolor="#00AA00">
	      <th>CCT</th>
		  <th>Nombre</th>
		  <th>Director</th>
		  <th>Turno</th>
		  <th>Telefono</th>
		  <th>Email</th>
		  <th>C. Postal</th>
		  <th>Nombre Asentamiento</th>
		  <th>Direccion</th>
	    </tr>
	    <?php
		$respuesta = $con->seEscuelaSupervision($resultados_super['cct']);
		while ($resultados_row = $con->fetch_array($respuesta)) {
		    print('
		    	<tr>
		            <td style="width: 11%; text-align: left;">'.$resultados_row['cct'].'</td>
					<td style="width: 13%; text-align: left;">'.$resultados_row['nombre'].'</td>
					<td style="width: 13%; text-align: left;">'.$resultados_row['director'].'</td>
					<td style="width: 11%; text-align: left;">'.$resultados_row['turno'].'</td>
					<td style="width: 11%; text-align: left;">'.$resultados_row['telefono'].'</td>
					<td style="width: 13%; text-align: left;">'.$resultados_row['email'].'</td>
					<td style="width:  4%; text-align: left;">'.$resultados_row['codigo_postal'].'</td>
					<td style="width: 11%; text-align: left;">'.$resultados_row['nom_asentamiento'].'</td>
					<td style="width: 13%; text-align: left;">'.$resultados_row['direccion'].'</td>
	            </tr>
			');
		}
	?>
	</table><hr>
	<?php }
} else {
	inicio();
}?>