
<?php if (isset($_GET['c'])&&$_GET['c']!='DIREDUIXTA') {
	if($_SESSION['TIPO_USUARIO']=='supervision'&&$_GET['c']==$_SESSION['CCT'] ){
		$respuesta = $con->seSupervision($_SESSION['CCT']);
		$num=$con->num_rows($respuesta);
		if ($num>0) {
	        $resultados_row = $con->fetch_array($respuesta);
	        $cct=$resultados_row['cct'];
			$sede=$resultados_row['sede'];
			$oficina=$resultados_row['oficina'];
			$num_escuelas=$resultados_row['num_escuelas'];
			$num_grupos=$resultados_row['num_grupos'];
			$num_alumnos=$resultados_row['num_alumnos'];
			$id_zona=$resultados_row['id_zona'];
			$zona=$resultados_row['zona'];
			$estado='hidden';
			$action='http://'.$_SERVER['SERVER_ADDR'].'/ixtapaluca/sql/Supervision/act';
	        include ($_SERVER['DOCUMENT_ROOT'].'/ixtapaluca'."/php/paginas/formularios/cuerpoSupervision.php");
	    }
	}else if($_SESSION['TIPO_USUARIO']=='administrador'){
		$respuesta = $con->seSupervision($_GET['c']);
		$num=$con->num_rows($respuesta);
	    if ($num>0) {
	        $resultados_row = $con->fetch_array($respuesta);
	        $cct=$resultados_row['cct'];
			$sede=$resultados_row['sede'];
			$oficina=$resultados_row['oficina'];
			$num_escuelas=$resultados_row['num_escuelas'];
			$num_grupos=$resultados_row['num_grupos'];
			$num_alumnos=$resultados_row['num_alumnos'];
			$id_zona=$resultados_row['id_zona'];
			$zona=$resultados_row['zona'];
			$estado='hidden';
			$action='http://'.$_SERVER['SERVER_ADDR'].'/ixtapaluca/sql/Supervision/act';
			include ($_SERVER['DOCUMENT_ROOT'].'/ixtapaluca'."/php/paginas/formularios/cuerpoSupervision.php");
	    }else{
	    	 print'<script type="text/javascript">alert("No existe la Supervision que busca");window.location="inicio";</script>';
	    }
	}else{
		denegado();
	}
} else {
	$cct=null;
	$sede=null;
	$oficina=null;
	$num_escuelas=null;
	$num_grupos=null;
	$num_alumnos=null;
	$id_zona=null;
	$zona=null;
	$estado='text';
	$action='http://'.$_SERVER['SERVER_ADDR'].'/ixtapaluca/sql/Supervision/reg';
	include ($_SERVER['DOCUMENT_ROOT'].'/ixtapaluca'."/php/paginas/formularios/cuerpoSupervision.php");
}
?>