<?php if ($_SESSION['TIPO_USUARIO']!="administrador") {
	inicio();
}
if (isset($_GET['c'])) {
	if($_GET['c']==$_SESSION['CCT']||$_SESSION['CCT']=='DIREDUIXTA'){
		$respuesta = $con->seZonaId($_GET['c']);
		$num=$con->num_rows($respuesta);
	    if ($num>0) {
	        $resultados_row = $con->fetch_array($respuesta);
			$id_zona=$resultados_row['id_zona'];
			$zona=$resultados_row['zona'];
			$id_nivel=$resultados_row['id_nivel'];
			$nivel=$resultados_row['nivel'];
			$subsistema=$resultados_row['subsistema'];
			$action='http://'.$_SERVER['SERVER_ADDR'].'/ixtapaluca/sql/Zona/act';
	    }else{
	      print'<script type="text/javascript">alert("No existe la Zona que busca");</script>';
	      inicio();
	    }
	}else{
		inicio();
	}
} else {
	$id_zona=null;
	$zona=null;
	$id_nivel=null;
	$nivel=null;
	$subsistema=null;
	$action='http://'.$_SERVER['SERVER_ADDR'].'/ixtapaluca/sql/Zona/reg';
}
?>

<div class="jumbotron">
    <div class="container">
    	<div class="col-md-3"></div>
	    <div class="col-md-6">
        <form autocomplete="off" id="formID" name="formulario" method="post" action="<?php print $action; ?>">
          <div class="row">
            <div class="col-md-12">
              <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Zona</h3>
                  </div>
                <div class="panel-body">
                  <div id="panDat">
                    <label class="title">Zona</label>
                    <input type="hidden" value="<?php print $id_zona;?>" name="id_zona"/>
                    <input value="<?php print $zona;?>" class="form-control validate[required] mayusculas"
					data-errormessage-value-missing="*Este campo es obligatorio <br> Ingrese Zona por favor" type="text" name="zona" id="zona" />
					<label class="title">Nivel</label>
					<input value="<?php print $nivel;?>" class="form-control validate[required] mayusculas"
					data-errormessage-value-missing="*Este campo es obligatorio<br>*  Ingrese su Nivel por favor" type="text" name="nivel" id="nivel" auto/>
					<input value="<?php print$id_nivel;?>" type="hidden"  name="id_nivel" id="id_nivel" />
					<div id="selecNi"></div>
					<div id="niveles"></div>
					<label class="title">Subsistema</label>
					<input  type="radio" name="subsistema" value="ESTATAL" class="validate[required] radio" <?php if ($subsistema=="ESTATAL") {
					print('checked');
					} ?>/><span>Estatal</span><br/>
					<input  type="radio" name="subsistema" value="FEDERAL" class="validate[required] radio" <?php if ($subsistema=="FEDERAL") {
					print('checked');
					} ?>/><span>Federal</span><br/>
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