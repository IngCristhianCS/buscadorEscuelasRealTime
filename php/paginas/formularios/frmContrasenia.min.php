<?php if (isset($_SESSION['CCT'])){
	if (isset($_POST['enviar'])){
		$con=new FuncionesSql();
		$respuesta=$con->seSupervision($_SESSION['CCT']);
		$resultados_row=$con->fetch_array($respuesta);
		//print($_POST['contrasenia'].$resultados_row['pass'].'<br>'.$con->MRES(md5($_POST['contrasenia'])));
		if ($resultados_row['password']==$con->MRES(md5($_POST['contrasenia']))) {
			$res=$con->acContrasenia($_SESSION['CCT'],$_POST['ncontrasenia']);
			if ($res!=false) {
				msjCorrecto('Cambio de contraseña correcto','Contrasenia',$_SESSION['CCT'],"ninguna");
			} else {
				msjError('http://'.$_SERVER['SERVER_ADDR'].'/ixtapaluca'.'/contrasenia');
			}
		} else {
			msjError('http://'.$_SERVER['SERVER_ADDR'].'/ixtapaluca'.'/contrasenia');
		}
	}
	?><body></body>
	<div class="jumbotron">
	    <div class="container">
	    	<div class="col-md-3"></div>
		    <div class="col-md-6">
	        <form autocomplete="off" id="formID" name="formulario" method="post" action="">
	          <div class="row">
	            <div class="col-md-12">
	              <div class="panel panel-success">
	                <div class="panel-heading">
	                    <h3 class="panel-title">Contraseña</h3>
	                  </div>
	                <div class="panel-body">
	                  <div id="panDat">
	                    <label class="title">Contraseña Actual</label>
	                    <input value="" class="form-control validate[required,ajax[ajaxValidarPass]],"
						data-errormessage-value-missing="*Este campo es obligatorio <br> Ingrese contraseña por favor" type="password" name="contrasenia" id="contrasenia" />
						<label class="title">Nueva Contraseña</label>
						<input value="" class="form-control validate[required]"
						data-errormessage-value-missing="*Este campo es obligatorio<br>*  Ingrese Nueva Contraseña por favor" type="password" name="ncontrasenia" id="ncontrasenia" auto/>
						<label class="title">Repetir Nueva Contraseña</label>
						<input value="" class="form-control validate[required,equals[ncontrasenia]]"
						data-errormessage-value-missing="*Este campo es obligatorio<br>*  Repetir Nueva Contraseña por favor" type="password" name="ncontrasenia1" id="ncontrasenia1" auto/>
	                  </div>
	                  <hr><input class="btn btn-success" type="submit" value="Enviar" name="enviar" />
	                </div>
	              </div>
	            </div>
	          </div>
	        </form>
	        </div>
	        <div class="col-md-3"></div>
	    </div>
	</div>
<?php } else {
	inicio();
}?>