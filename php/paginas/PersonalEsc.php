<?php $con=new FuncionesSql();
if (isset($_GET['c'])&&$_SESSION['TIPO_USUARIO']=='administrador') {
	$respuesta = $con->sePersona($_GET['c']);
	$resultado = $con->fetch_array($respuesta);
	if (isset($_GET['a'])) {
		$respuesta = $con->sePersonalEscM($_GET['c'],$_GET['a']);
		$resultados_row = $con->fetch_array($respuesta);
        $cct =$resultados_row['cct'];
        $sueldo=$resultados_row['sueldo'];
        $action="http://".$_SERVER['SERVER_ADDR']."/ixtapaluca/sql/PersonalEsc/".$_GET['c']."/".$_GET['a']."/act";
	} else {
		$cct =null;
        $sueldo=null;
        $action="http://".$_SERVER['SERVER_ADDR']."/ixtapaluca/sql/PersonalEsc/".$_GET['c']."/reg";
	}
} else {
	inicio();
}
?>
<div class="jumbotron">
    <div class="container">
    <div class="col-md-12 panel">
    	<strong>RFC:</strong><?php print $resultado['rfc'];?><br>
		<strong>Nombre:</strong><?php print $resultado['nombre'];?> <?php print $resultado['a_paterno'];?> <?php print $resultado['a_materno'];?>
    </div>
      <div class="col-md-4">
      <form autocomplete="off" id="formID" name="formulario" method="post" action="<?php print $action; ?>">
          <div class="row">
            <div class="col-md-12">
              <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Escuela</h3>
                  </div>
                <div class="panel-body">
                  <div id="panDat">
                  <h4 class="title">CCT *</h4>
                  <input type="hidden" value="<?php print $cct; ?>" name="cct_m" id="cct_m">
                    <input value="<?php print $cct; ?>" class="form-control validate[required,custom[cct]]  mayusculas"
                    data-errormessage-value-missing="*Este campo es obligatorio<br>*  Ingrese el CCT  por favor"
                    type="text" name="cct" id="cctbuscar"/>
                    <div id="cctbus"></div>
                    <div id="seleccionado"></div>
                     <h4 class="title">Sueldo *</h4>
	                <input type="text" id="sueldo" name="sueldo" value="<?php print $sueldo; ?>" class="form-control validate[required,custom[integer]]"
	                data-errormessage-value-missing="*Este campo es obligatorio<br>*  Ingrese su Sueldo por favor">
                  </div>
                  <hr><input class="btn btn-success" type="submit" value="Enviar" />
                  <?php if ($cct==null): ?>
                  	<input type="reset" class="btn btn-info">
                  <?php else: ?>
                  	<a href="http://<?php print $_SERVER['SERVER_ADDR'];?>/ixtapaluca/personalEsc/<?php print $_GET['c'] ?>"><input class="btn btn-danger" type="button" value="Cancelar" /></a>
                  <?php endif ?>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="col-md-8">
        <div style=" height:300px; overflow-x:hidden; overflow: scroll;"  class="panel-body panel panel-default">
			<table>
			    <thead>
			        <tr class="label-success">
			          <th>CCT Escuela</th>
			          <th>Nombre Escuela</th>
			          <th>Funcion</th>
			          <th>Sueldo</th>
					  <th>Actualizar</th>
					  <th>Eliminar</th>
			        </tr>
			    </thead>
			    <tbody id="resultado">
		<?php $respuesta = $con->sePersonalEsc($_GET['c']);
			while ($resultados_row = $con->fetch_array($respuesta)) {
			    print('
			    	<tr>
			            <td d-c="CCT Escuela">'.$resultados_row['cct'].'</td>
			            <td d-c="Nombre Escuela">'.$resultados_row['nombre_e'].'</td>
			            <td d-c="Funcion">'.$resultados_row['funcion'].'</td>
			            <td d-c="Sueldo">'.$resultados_row['sueldo'].'</td>
			              <td d-c="Actualizar"><a href="http://'.$_SERVER['SERVER_ADDR'].'/ixtapaluca/personalEsc/'.$resultados_row['rfc'].'/'.$resultados_row['cct'].'"><img src="http://'.$_SERVER['SERVER_ADDR'].'/ixtapaluca'.'/images/actualizar.png" class="ifo" title="Actualizar" alt=""></a></td>
			              <td d-c="Eliminar"><a href="#" onclick="eliminarPersonalEsc(\''.$resultados_row['rfc'].'\',\''.$resultados_row['cct'].'\')"><img src="http://'.$_SERVER['SERVER_ADDR'].'/ixtapaluca'.'/images/eliminar.png" class="ifo" title="Eliminar" alt=""></a></td>
			        </tr>
				');
			}
			?>
				</tbody>
			</table>
		</div>
      </div>
    </div>
</div>
