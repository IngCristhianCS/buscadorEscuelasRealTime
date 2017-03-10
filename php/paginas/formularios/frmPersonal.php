<?php if ($_SESSION['CCT']!='DIREDUIXTA') {
  inicio();
}
if (isset($_GET['c'])) {
  $respuesta = $con->sePersona($_GET['c']);
  $num=$con->num_rows($respuesta);
    if ($num>0) {
        $resultados_row = $con->fetch_array($respuesta);
        $rfc =$resultados_row['rfc'];
        $nombre =$resultados_row['nombre'];
        $a_paterno =$resultados_row['a_paterno'];
        $a_materno =$resultados_row['a_materno'];
        $funcion =$resultados_row['funcion'];
        $id_funcion =$resultados_row['id_funcion'];
        $action ='http://'.$_SERVER['SERVER_ADDR'].'/ixtapaluca'.'/sql/Personal/act';
    }else{
      print'<script type="text/javascript">
              alert("No existe el Empleado que busca");
              window.location="/tbl/Personal";
            </script>';
      }
} else {
  $rfc =null;
  $nombre=null;
  $a_paterno =null;
  $a_materno =null;
  $funcion =null;
  $id_funcion =null;
  $action ='http://'.$_SERVER['SERVER_ADDR'].'/ixtapaluca'.'/sql/Personal/reg';
}
?>
<div class="jumbotron">
    <div class="container">
      <div class="col-md-3"></div>
        <div class="col-md-6">
        <form autocomplete="off" id="formID" name="formulario" method="post" action="<?php print $action ?>">
          <div class="row">
            <div class="col-md-12">
              <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Empleado</h3>
                  </div>
                <div class="panel-body">
                  <div id="panDat">
                  <h4 class="title">RFC *</h4>
                  <input type="hidden" value="<?php print $rfc;?>" name="rfc_m" id="rfc_m">
                    <input value="<?php print $rfc;?>" class="form-control validate[required,custom[rfc],ajax[ajaxValidarRfc]]  mayusculas"
                    data-errormessage-value-missing="*Este campo es obligatorio<br>*  Ingrese su RFC por favor"
                    type="text" name="rfc" id="rfc" />
                    <h4 class="title">Nombre(s) *</h4>
                    <input value="<?php print $nombre;?>" class="form-control validate[required,custom[onlyLetterSp]] mayusculas"
                    data-errormessage-value-missing="*Este campo es obligatorio<br>*  Ingrese Nombre(s) por favor"
                    type="text" name="nombre" id="nombre" />
                    <h4 class="title">Apellido Paterno *</h4>
                    <input value="<?php print $a_paterno;?>" class="form-control validate[required,custom[onlyLetterSp]] mayusculas"
                    data-errormessage-value-missing="*Este campo es obligatorio <br> Ingrese su A. Paterno por favor"
                    type="text" name="app" id="app" />
                    <h4 class="title">Apellido Materno *</h4>
                    <input value="<?php print $a_materno;?>" class="form-control validate[required,custom[onlyLetterSp]] mayusculas"
                    data-errormessage-value-missing="*Este campo es obligatorio <br> Ingrese su A. Materno por favor"
                    type="text" name="apm" id="apm" />
                    <h4 class="title">Funcion *</h4>
                    <input value="<?php print $funcion;?>" class="form-control validate[required] mayusculas"
                    data-errormessage-value-missing="*Este campo es obligatorio<br>*  Ingrese su Funcion por favor" type="text" name="funcion" id="funcion" auto/>
                    <input value="<?php print $id_funcion;?>" type="hidden"  name="id_funcion" id="id_funcion" />
                    <div id="selec"></div>
                    <div id="funciones"></div>
                  </div>
                  <hr><input class="btn btn-success" type="submit" value="Enviar" />
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="col-md-3"></div>
    </div>
</div>