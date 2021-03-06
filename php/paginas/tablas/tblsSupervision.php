<?php if ($_SESSION['TIPO_USUARIO']!="administrador") {
	denegado();
}else{
?>
<div class="panel panel-success" id="tabla">
	<div class="panel-body">
	  <div class="row">
	    <div class="col-xs-6 col-md-4"><h6>Buscar por Sede: <input type="radio" name="grupo" id="grupo_0" checked></h6></div>
	    <div class="col-xs-6 col-md-3"><h6>Buscar por CCT: <input type="radio" name="grupo" id="grupo_1" ></h6></div>
	  </div>
	  <div class="row" id="Nombre">
	    <div class="col-md-12">
	      <div class="form-group">
	        <input type="text" placeholder="Ingrese Sede" name="bNombre" id="b_sede"  class="form-control mayusculas" autofocus="true" />
	      </div>
	    </div>
	  </div>
	  <div class="row" id="CCT">
	    <div class="col-md-12">
	      <div class="form-group">
	        <input type="text" placeholder="Ingrese CCT" name="bCCT" id="b_cctsuper" class="form-control mayusculas"/>
	      </div>
	    </div>
	  </div>
	  <button type="button" id="btnPdf" tabla="Supervision" class="btn btn-success" data-toggle="modal" data-target="#modal-fullscreen">
		Generar lista PDF
	  </button>
	  <a href="http://<?php print $_SERVER['SERVER_ADDR'];?>/ixtapaluca/excel/Supervision"><button type="button" id="btnexcel" tabla="Escuela" class="btn btn-success" >
		Generar lista excel
	  </button></a>
	</div>
</div>
<div class="modal modal-fullscreen fade" id="modal-fullscreen" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body " id="pdf">
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
			  <th>Sede</th>
			  <th>Oficina</th>
			  <th>Escuelas</th>
			  <th>Grupos</th>
			  <th>Alumnos</th>
			  <th>Zona</th>
			  <th>Actualizar</th>
			  <th>Eliminar</th>
	        </tr>
	    </thead>
	    <tbody id="resultadoSupervision">
<?php $respuesta = $con->seSupervisiones();
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
?>
		</tbody>
	</table>
</div><?php } ?>