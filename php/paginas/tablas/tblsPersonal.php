<?php if ($_SESSION['CCT']!='DIREDUIXTA') {
  denegado();
}else{ ?>
<div class="panel panel-success" id="tabla">
	<div class="panel-body">
	  <div class="row">
	    <div class="col-xs-6 col-md-4"><h6>Buscar por RFC: <input type="radio" name="grupo" id="grupo_0" checked></h6></div>
	    <div class="col-xs-6 col-md-3"><h6>Buscar por Nombre: <input type="radio" name="grupo" id="grupo_1" ></h6></div>
	  </div>
	  <div class="row" id="Nombre">
	    <div class="col-md-12">
	      <div class="form-group">
	        <input type="text" placeholder="Ingrese RFC" name="bNombre" id="b_rfc"  class="form-control mayusculas" autofocus="true" />
	      </div>
	    </div>
	  </div>
	  <div class="row" id="CCT">
	    <div class="col-md-12">
	      <div class="form-group">
	        <input type="text" placeholder="Ingrese Nombre" name="bCCT" id="b_nombrep" class="form-control mayusculas" />
	      </div>
	    </div>
	  </div>
	  <button type="button" id="btnPdf" tabla="Personal" class="btn btn-success" data-toggle="modal" data-target="#modal-fullscreen">
		Generar lista PDF
	  </button>
	 <a href="http://<?php print $_SERVER['SERVER_ADDR'];?>/ixtapaluca/excel/Personal"><button type="button" id="btnexcel" tabla="Personal" class="btn btn-success" >
		Generar lista excel
	  </button></a>
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
	          <th>RFC</th>
			  <th>Nombre(s)</th>
			  <th>Apellido Paterno</th>
			  <th>Apellido Materno</th>
			  <th>Función</th>
			  <th>Administrar Escuelas</th>
			  <th>Actualizar</th>
			  <th>Eliminar</th>
	        </tr>
	    </thead>
	    <tbody id="resultadoPersonal">
		<?php $respuesta = $con->sePersonal();
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
		?>
		</tbody>
	</table>
</div><?php } ?>