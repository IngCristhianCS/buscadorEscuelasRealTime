<div class="panel panel-success" id="tabla">
	<div class="panel-body">
	  <div class="row">
	    <div class="col-xs-6 col-md-4"><h6>Buscar por Nombre: <input type="radio" name="grupo" id="grupo_0" checked></h6></div>
	    <div class="col-xs-6 col-md-3"><h6>Buscar por CCT: <input type="radio" name="grupo" id="grupo_1" ></h6></div>
	  </div>
	  <div class="row" id="Nombre">
	    <div class="col-md-12">
	      <div class="form-group">
	        <input type="text" placeholder="Ingrese Nombre Escuela" name="bNombre" id="b_nombre"  class="form-control mayusculas" autofocus="true" />
	      </div>
	    </div>
	  </div>
	  <div class="row" id="CCT">
	    <div class="col-md-12">
	      <div class="form-group">
	        <input type="text" placeholder="Ingrese CCT" name="bCCT" id="b_cct" class="form-control mayusculas" />
	      </div>
	    </div>
	  </div>
	  <button type="button" id="btnPdf" tabla="Escuela" class="btn btn-success" data-toggle="modal" data-target="#modal-fullscreen">
		Generar lista PDF
	  </button>
	 <a href="http://<?php print $_SERVER['SERVER_ADDR'];?>/ixtapaluca/excel/Escuela"><button type="button" id="btnexcel" tabla="Escuela" class="btn btn-success" >
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
	          <th>CCT</th>
			  <th>Nombre</th>
			  <th>Director</th>
			  <th>Subdirector</th>
			  <th>Subsistema</th>
			  <th>Org Social</th>
			  <th>Turno</th>
			  <th>Codigo Postal</th>
			  <th>Nombre Asentamiento</th>
			  <th>Actualizar Ubicacion</th>
			  <th>Contacto</th>
			  <th>Actualizar</th>
			  <th>Eliminar</th>
	        </tr>
	    </thead>
	    <tbody id="resultadoEscuela">
		<?php $respuesta = $con->seEscuelasZona();
		while ($resultados_row = $con->fetch_array($respuesta)) {
		    print('
		    	<tr id="Escuela'.$resultados_row['cct'].'">
		            <td d-c="CCT">'.$resultados_row['cct'].'</td>
					  <td d-c="Nombre">'.$resultados_row['nombre'].'</td>
					  <td d-c="Director">'.$resultados_row['director'].'</td>
					  <td d-c="Subdirector">'.$resultados_row['subdirector'].'</td>
					  <td d-c="Subsistema">'.$resultados_row['subsistema'].'</td>
					  <td d-c="Org Social">'.$resultados_row['org_social'].'</td>
					  <td d-c="Turno">'.$resultados_row['turno'].'</td>
					  <td d-c="Codigo Postal">'.$resultados_row['codigo_postal'].'</td>
					  <td d-c="Nombre Asentamiento">'.$resultados_row['nom_asentamiento'].'</td>
		              <td d-c="Actualizar Ubicacion"><a href="http://'.$_SERVER['SERVER_ADDR'].'/ixtapaluca/frm/Ubicacion/'.$resultados_row['cct'].'"><img src="images/actualizarUbica.png" class="ifo" title="Actualizar Ubicacion" alt=""></a></td>
		              <td d-c="Contacto"><a href="http://'.$_SERVER['SERVER_ADDR'].'/ixtapaluca/detalles/'.$resultados_row['cct'].'"><img src="'. $_SERVER['SERVER_ADDR'].'/ixtapaluca/images/mapa.jpg" class="ifo" title="Ver Mapa" alt=""></a></td>
		              <td d-c="Actualizar"><a href="http://'.$_SERVER['SERVER_ADDR'].'/ixtapaluca/frm/Escuela/'.$resultados_row['cct'].'"><img src="http://'.$_SERVER['SERVER_ADDR'].'/ixtapaluca'.'/images/actualizar.png" class="ifo" title="Actualizar" alt=""></a></td>
		              <td d-c="Eliminar"><a href="#" onclick="eliminarEscuela(\''.$resultados_row['cct'].'\')"><img src="http://'.$_SERVER['SERVER_ADDR'].'/ixtapaluca'.'/images/eliminar.png" class="ifo" title="Eliminar" alt=""></a></td>
		        </tr>
			');
		}
		?>
		</tbody>
	</table>
</div>
