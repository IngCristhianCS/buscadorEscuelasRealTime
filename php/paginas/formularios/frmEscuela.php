<?php if (isset($_GET['c'])) {
  $respuesta = $con->seEscuela($_GET['c']);
  $num=$con->num_rows($respuesta);
    if ($num>0) {
        $resultados_row = $con->fetch_array($respuesta);
        $cct =$resultados_row['cct'];
        $supervision_cct =$resultados_row['supervision_cct'];
        $nombre =$resultados_row['nombre'];
        $director =$resultados_row['director'];
        $subdirector =$resultados_row['subdirector'];
        $telefono =$resultados_row['telefono'];
        $email =$resultados_row['email'];
        $org_social =$resultados_row['org_social'];
        $hombres =$resultados_row['hombres'];
        $mujeres =$resultados_row['mujeres'];
        $total =$resultados_row['total'];
        $profesores =$resultados_row['profesores'];
        $grupos =$resultados_row['grupos'];
        $turno =$resultados_row['turno'];
        $id_turno =$resultados_row['id_turno'];
        $zona =$resultados_row['zona'];
        $id_zona =$resultados_row['id_zona'];
        $action ='http://'.$_SERVER['SERVER_ADDR'].'/ixtapaluca'.'/sql/Escuela/act';
    }else{
      print'<script type="text/javascript">
              alert("No existe la escuela que busca");
              window.location="escuelas";
            </script>';
      }
} else {
  $cct =null;
  $supervision_cct=null;
  $nombre =null;
  $director =null;
  $subdirector =null;
  $subsistema =null;
  $telefono =null;
  $email =null;
  $org_social =null;
  $hombres =null;
  $mujeres =null;
  $total =null;
  $profesores =null;
  $grupos =null;
  $turno =null;
  $id_turno =null;
  $zona =null;
  $id_zona =null;
  $action ='http://'.$_SERVER['SERVER_ADDR'].'/ixtapaluca'.'/sql/Escuela/reg';
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
                    <h3 class="panel-title">Escuela</h3>
                  </div>
                <div class="panel-body">
                  <div id="panDat">
                    <h4 class="title">CCT Escuela</h4>
                    <input value="<?php print $cct;?>" class="form-control validate[required,min[10],custom[onlyLetterNumber],maxSize[10]] mayusculas"
                    data-errormessage-value-missing="*Este campo es obligatorio<br>*  Ingrese su CCT por favor"
                    type="hidden" name="cct_mod" id="cct_mod" />
                    <input value="<?php print $cct;?>" class="form-control validate[required,min[10],custom[onlyLetterNumber],maxSize[10]] mayusculas"
                    data-errormessage-value-missing="*Este campo es obligatorio<br>*  Ingrese su CCT por favor"
                    type="text" name="cct" id="cct" />
                    <h4 class="title">Nombre Escuela</h4>
                    <input value="<?php print $nombre;?>" class="form-control validate[required] mayusculas"
                    data-errormessage-value-missing="*Este campo es obligatorio<br>*  Ingrese su Nombre por favor"
                    type="text" name="nombre" id="nombre" />
                    <h4 class="title">Director</h4>
                    <input value="<?php print $director;?>" class="form-control validate[required,custom[onlyLetterSp]] mayusculas"
                    data-errormessage-value-missing="*Este campo es obligatorio<br>*  Ingrese Director por favor"
                    type="text" name="director" id="director" />
                    <h4 class="title">Subdirector</h4>
                    <input value="<?php print $subdirector;?>" class="form-control mayusculas"
                    data-errormessage-value-missing="*  Ingrese Subdirector por favor"
                    type="text" name="subdirector" id="subdirector" />
                    <h4 class="title">Turno</h4>
                    <input value="<?php print $turno;?>" class="form-control validate[required,custom[onlyLetterSp]] mayusculas"
                    data-errormessage-value-missing="*Este campo es obligatorio<br>*  Ingrese su Turno por favor" type="text" name="turno" id="turno" />
                    <input value="<?php print $id_turno;?>" type="hidden"  name="id_turno" id="id_turno" />
                    <div id="selecTu"></div>
                    <div id="turnos"></div>
                    <h4 class="title">Telefono</h4>
                    <input value="<?php print $telefono;?>" class="form-control validate[required,custom[phone]]"
                    data-errormessage-value-missing="*Este campo es obligatorio<br>*  Ingrese su Telefono por favor"
                    type="text" name="telefono" id="telefono" />
                    <h4 class="title">Correo Electronico</h4>
                    <input value="<?php print $email;?>" class="form-control validate[required,custom[email]]"
                    data-errormessage-value-missing="*Este campo es obligatorio<br>*  Ingrese su Correo electronico por favor"
                    type="text" name="email" id="email" />
                    <h4 class="title">Organizacion Social</h4>
                    <input value="<?php print $org_social;?>" class="form-control mayusculas"
                    data-errormessage-value-missing="  Ingrese Organizacion Social por favor"
                    type="text" name="orgsoc" id="orgsoc" />
                    <?php
                    if ($_SESSION['TIPO_USUARIO']=='administrador') {
                      print('<h4 class="title">Zona</h4>
                        <input value="'.$zona.'" class="form-control validate[required] mayusculas"
                        data-errormessage-value-missing="*Este campo es obligatorio<br>*  Ingrese su Zona por favor" type="text" name="zona" id="zonaBA" auto/>
                        <input value="'.$id_zona.'" type="hidden"  name="id_zona" id="id_zona" />
                        <div id="selec"></div>
                        <div id="zonas"></div>');
                     }else{
                      print('<input value="'.$id_zona.'" type="hidden"  name="id_zona" id="id_zona" />');
                     }
                      ?>
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
