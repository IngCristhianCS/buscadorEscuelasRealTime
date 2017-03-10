<?php function direccion($tabla,$id){
		if ($tabla=='Zona') {
			return 'inputOptions: {
						"http://'.$_SERVER['SERVER_ADDR'].'/ixtapaluca'.'/frm/'.$tabla.'"			:"Nueva '.$tabla.'",
						"http://'.$_SERVER['SERVER_ADDR'].'/ixtapaluca'.'/frm/'.$tabla.'/'.$id.'"	:"Ver '.$tabla.'",
						"http://'.$_SERVER['SERVER_ADDR'].'/ixtapaluca'.'/tbl/'.$tabla.'"			:"Tabla de '.$tabla.'s",
						"http://'.$_SERVER['SERVER_ADDR'].'/ixtapaluca'.'/frm/Supervision"			:"Registrar Supervision"
					}';
		}else if($tabla=='Supervision'){
			if ($_SESSION['TIPO_USUARIO']=="administrador") {
				return 'inputOptions: {
							"http://'.$_SERVER['SERVER_ADDR'].'/ixtapaluca'.'/frm/'.$tabla.'"			:"Nueva '.$tabla.'",
							"http://'.$_SERVER['SERVER_ADDR'].'/ixtapaluca'.'/frm/'.$tabla.'/'.$id.'"	:"Ver '.$tabla.'",
							"http://'.$_SERVER['SERVER_ADDR'].'/ixtapaluca'.'/tbl/'.$tabla.'"			:"Tabla de '.$tabla.'es",
							"http://'.$_SERVER['SERVER_ADDR'].'/ixtapaluca'.'/frm/Supervision"			:"Registrar Escuela"
						}';
			} else {
				return 'inputOptions: {
					"http://'.$_SERVER['SERVER_ADDR'].'/ixtapaluca'.'/frm/'.$tabla.'/'.$id.'"	:"Ver '.$tabla.'",
					"http://'.$_SERVER['SERVER_ADDR'].'/ixtapaluca'.'/frm/Supervision"			:"Registrar Escuela"
				}';
			}
		}else if($tabla=='Escuela'){
			return 'inputOptions: {
						"http://'.$_SERVER['SERVER_ADDR'].'/ixtapaluca'.'/frm/Ubicacion/'.$id.'"    :"Configurar Ubicación",
						"http://'.$_SERVER['SERVER_ADDR'].'/ixtapaluca'.'/frm/'.$tabla.'"			:"Nueva '.$tabla.'",
						"http://'.$_SERVER['SERVER_ADDR'].'/ixtapaluca'.'/frm/'.$tabla.'/'.$id.'"	:"Ver '.$tabla.'",
						"http://'.$_SERVER['SERVER_ADDR'].'/ixtapaluca'.'/tbl/'.$tabla.'"			:"Tabla de '.$tabla.'s",
						"http://'.$_SERVER['SERVER_ADDR'].'/ixtapaluca'.'/detalles/'.$id.'"			:"Detalles y Ubicacion",
						"inicio"					:"Inicio"
					}';
		}else if($tabla=='Ubicacion'){
			return 'inputOptions: {
						"http://'.$_SERVER['SERVER_ADDR'].'/ixtapaluca'.'/frm/'.$tabla.'/'.$id.'"	:"Ver '.$tabla.'",
						"http://'.$_SERVER['SERVER_ADDR'].'/ixtapaluca'.'/tbl/Escuela"				:"Tabla de Escuelas",
						"http://'.$_SERVER['SERVER_ADDR'].'/ixtapaluca'.'/detalles/'.$id.'"			:"Detalles y Ubicacion"
					}';
		}else if($tabla=='Personal'){
			return 'inputOptions: {
						"http://'.$_SERVER['SERVER_ADDR'].'/ixtapaluca'.'/frm/'.$tabla.'/'.$id.'"	:"Ver Persona",
						"http://'.$_SERVER['SERVER_ADDR'].'/ixtapaluca'.'/frm/'.$tabla.'"			:"Registrar Persona",
						"http://'.$_SERVER['SERVER_ADDR'].'/ixtapaluca'.'/tbl/'.$tabla.'"			:"Tabla de Personal",
						"http://'.$_SERVER['SERVER_ADDR'].'/ixtapaluca'.'/personalEsc/'.$id.'"		:"Ver Funciones"
					}';
		}else {
			return "inputOptions: {
			    '#ff0000': 'Red',
			    '#00ff00': 'Green',
			    '#0000ff': 'Blue'
			  }";
		}
	}
	function msjCorrecto($mensaje,$tabla,$id,$act){
		if ($tabla=='personalEsc') {
			$direc='http://'.$_SERVER['SERVER_ADDR'].'/ixtapaluca'.'/personalEsc/'.$id;
			$elim=$direc;
		} else if($tabla=='Contrasenia'){
			$direc='#';
			$elim=null;
		}else {
			$direc='http://'.$_SERVER['SERVER_ADDR'].'/ixtapaluca'.'/frm/'.$tabla.'/'.$id;
			$elim='http://'.$_SERVER['SERVER_ADDR'].'/ixtapaluca'.'/tbl/'.$tabla;
		}
		print ('<script>
			swal({  title: "'.$mensaje.'",
					text: "Educacion Ixtapaluca",
					type: "success",
					showCancelButton: false,
					confirmButtonColor: "#DD6B55",
					confirmButtonText: "OK",
					closeOnConfirm: false}).then(function(isConfirm){
						var msg = {mensaje:   "'.$mensaje.'",
								usuario:      "'.$_SESSION['USUARIO'].'",
								direccion:    "'.$direc.'",
								id:           "'.$id.'",
								tabla:		  "'.$tabla.'",
								accion:		  "'.$act.'"
						};
						websocket.send(JSON.stringify(msg));
						if ("'.$act.'"==="eli") {
							window.location.href="'.$elim.'";
						}else if("'.$tabla.'"=="personalEsc"){
							window.location.href="http://'.$_SERVER['SERVER_ADDR'].'/ixtapaluca'.'/personalEsc/'.$id.'";
						}else if("'.$tabla.'"=="Contrasenia"){
							window.location.href="http://'.$_SERVER['SERVER_ADDR'].'/ixtapaluca'.'/inicio";
						}else {
							swal({
								  title: "Educacion Ixtapaluca",
								  input: "select",
								  '.direccion($tabla,$id).',
								  inputPlaceholder: "Selecciona Accion",
								  inputValidator: function(result) {
								    return new Promise(function(resolve, reject) {
								      if (result!="Selecciona Accion") {
								        resolve();
								      } else {
								        reject("seleccione una Opcion Por Favor");
								      }
								    });
								  }
								}).then(function(result) {
								  if (result) {
								    window.location.href=result
								 }else{
								 	window.location.href="http://'.$_SERVER['SERVER_ADDR'].'/ixtapaluca'.'/inicio"
								 }
							})
						}
		    		});
		    </script>');
	}
	function msjError($direccion){
		print ('<script>swal({ title: "Error" ,   text: "Educacion Ixtapaluca",   type: "error",   showCancelButton: false,   confirmButtonColor: "#DD6B55",   confirmButtonText: "ok",   closeOnConfirm: false}).then(function(isConfirm){ window.location.href="'.$direccion.'"; });</script>');
	}
	function msjBienvenido(){
		print('<script>swal({   title: "Bienvenido",   text: "Preparando su Cuenta!",   imageUrl: "http://'.$_SERVER['SERVER_ADDR'].'/ixtapaluca'.'/images/ok.gif", timer: 2000,   showConfirmButton: false}).then(function(isConfirm){ window.location.href="inicio"; });</script>');
	}
	function msjAdios(){
		print('<script>swal({   title: "Adios",   text: "Cerrando Sesion!",   imageUrl: "http://'.$_SERVER['SERVER_ADDR'].'/ixtapaluca'.'/images/adios.gif", timer: 2000,   showConfirmButton: false}).then(function(isConfirm){ window.location.href="inicio"; });</script>');
	}
	function redirigir($direccion){
		print('<script>window.location.href="'.$direccion.'";</script>');
	}
	function inicio(){
		print('<script>window.location.href="http://'.$_SERVER['SERVER_ADDR'].'/ixtapaluca'.'/inicio";</script>');
	}
?>