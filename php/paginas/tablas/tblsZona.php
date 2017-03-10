<?php if ($_SESSION['CCT']!='DIREDUIXTA') {
  denegado();
} else{?>
<div class="panel panel-success" id="tabla">
	<div class="panel-body">
	  <div class="row" id="Nombre">
	    <div class="col-md-12">
	      <div class="form-group">
	        <input type="text" placeholder="Ingrese Zona" name="bNombre" id="b_zona"  class="form-control mayusculas" autofocus="true" />
	      </div>
	    </div>
	  </div>
	</div>
</div>
<div class="modal modal-fullscreen fade" id="modal-fullscreen" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body" id="pdf">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div style=" height:400px; overflow-x:hidden; overflow: scroll;" class="panel-body panel panel-default">
	<table>
	    <thead>
	        <tr class="label-success">
	          <th>Zona</th>
			  <th>Nivel</th>
			  <th>Subsistema</th>
			  <th>Actualizar</th>
			  <th>Eliminar</th>
	        </tr>
	    </thead>
	    <tbody id="resultadoZona">
		<?php $respuesta = $con->seZonas();
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
		</tbody>
	</table>
</div><?php } ?>