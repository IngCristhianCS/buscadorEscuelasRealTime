<?php if (isset($_GET['c'])) {
  $respuesta = $con->seEscuela($_GET['c']);
  $num=$con->num_rows($respuesta);
    if ($num>0) {
        $resultados_row = $con->fetch_array($respuesta);
        $nombre=$resultados_row['nombre'];
        $cct = $resultados_row['cct'];
        $latitud =  $resultados_row['latitud'];
        $longitud =  $resultados_row['longitud'];
        $heading =  $resultados_row['heading'];
        $pitch =  $resultados_row['pitch'];
        $direccion =  $resultados_row['direccion'];
        $id_asentamiento = $resultados_row['id_asentamiento'];
        $codigo_postal = $resultados_row['codigo_postal'];
    $estado='hidden';
    $action='http://'.$_SERVER['SERVER_ADDR'].'/ixtapaluca/sql/Ubicacion/act';
    }else{
      print'<script type="text/javascript">alert("No existe la escuela que busca");window.location="escuelas";</script>';
      }
} else {
  $cct = null;
  $nombre = null;
  $latitud =19.3176558;
  $longitud =-98.9098502;
  $heading =0;
  $pitch =0;
  $direccion = null;
  $cct = null;
  $id_asentamiento = null;
  $codigo_postal = null;
  $estado='text';
  $action='http://'.$_SERVER['SERVER_ADDR'].'/ixtapaluca/sql/Ubicacion/reg';
}
?>

<div class="jumbotron">
    <div class="container">
      <div class="row">
        <form autocomplete="off" id="formID" name="formulario" method="post" action="<?php print $action; ?>">
          <div class="row">
          <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title"><?php print $nombre; ?></h3>
            </div>
            <div class="panel-body">
              <div id="col-md-12">
                <input value="<?php print $cct;?>" type="hidden" name="cct" id="cct" />
                <label class="title">Codigo Postal</label>
                <input value="<?php print $codigo_postal;?>" class="form-control validate[required,custom[integer],min[4]maxSize[5]]"
                data-errormessage-value-missing="*Este campo es obligatorio<br>*  Ingrese su Codigo Postal por favor"
                type="text" name="cp" id="cp" class="mayusculas" auto/>
                <input value="<?php print $id_asentamiento;?>" type="hidden" name="id_asentamiento" id="id_asentamiento" />
                <div id="seleccionado"></div>
                <div id="codigo"></div>
                <label class="title">Dirreccion Calle</label>
                <input value="<?php print $direccion;?>" class="form-control validate[required] mayusculas"
                data-errormessage-value-missing="*Este campo es obligatorio<br>*  Ingrese su Calle o Avenida por favor"
                type="text" name="direccion" id="direccion" /><br>
              </div>
              <div class="col-md-12">
                <div id="floating-panel">
                  <table>
                    <tr>
                      <td></td><td id="position-cell">&nbsp;</td>
                    </tr>
                    <tr>
                      <td></td><td id="heading-cell"></td>
                    </tr>
                    <tr>
                      <td></td><td id="pitch-cell"></td>
                      <td>Latitud<input value="<?php print $latitud; ?>" class=" form-control validate[required]"
                      data-errormessage-value-missing="*Este campo es obligatorio<br>*  Ingrese X por favor"
                      type="text" name="latitud" id="latitud" /></td><td>-</td>
                      <td>Longitud<input value="<?php print $longitud; ?>" class="form-control validate[required]"
                      data-errormessage-value-missing="*Este campo es obligatorio<br>*  Ingrese Y por favor"
                      type="text" name="longitud" id="longitud" /></td><td>-</td>
                      <td>Heading<input value="<?php print $heading;?>" class=" form-control validate[required]"
                      data-errormessage-value-missing="*Este campo es obligatorio<br>*  Gire la brujula Para Obtener los datos"
                      type="text" name="heading" id="heading"></td><td>-</td>
                          <td>Pitch<input value="<?php print $pitch;?>" class=" form-control validate[required]"
                      data-errormessage-value-missing="*Este campo es obligatorio<br>*  Gire la brujula Para Obtener los datos"
                      type="text" name="pitch" id="pitch"></td>
                    </tr>
                    <tr>
                      <td></td><td id="pano-cell">&nbsp;</td>
                    </tr>
                    <table id="links_table"></table>
                  </table>
                </div>
              </div>
              <div class="col-md-6">
                <div id="map" style="width:100%;height:500px"></div>
              </div>
              <div class="col-md-6">
                <div id="pano" style="width:100%;height:500px"></div>
              </div>
              <hr><input class="btn btn-success" type="submit" value="Enviar" />
            </div>
          </div>
          </div>
        </form>
        <input  id="pac-input" class="controls" type="text" placeholder="Buscar" onkeypress="return event.keyCode!=13">
      </div>
    </div>
</div>
<script src="js/mapaAgregar.js"></script>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB8jcBHg9IeemVmD2aKa53dcDaYwC_YQVA&signed_in=true&libraries=places&callback=inicializa">
</script>
