<?php

function cuerpoPDF(){
	include ("php/pdf/pdf.php");
}
function cuerpoexcel(){
	include ("php/excel/excel.php");
}
function cuerpoPrincipal($pag){
	include ($_SERVER['DOCUMENT_ROOT'].'/ixtapaluca'.'/php/includes/cabecera.min.php');
	if ($pag=="frm"||
		$pag=="tbl"||
		$pag=="escuelas"||
		$pag=="contacto"||
		$pag=="inicio"||
		$pag=="personalEsc"||
		$pag=="detalles"||
		$pag=="401"||
		$pag=="404"||
		$pag=="403"||
		$pag=="500") {
		include ($_SERVER['DOCUMENT_ROOT'].'/ixtapaluca'."/php/paginas/".$pag.".min.php");
	}
	else if($pag=="sql" ||
			$pag=="bsc"||
			$pag=='salir'||
			$pag=="ingresar"||
			$pag=="validar"){
		include ("php/".$pag.".php");
	}
	include ($_SERVER['DOCUMENT_ROOT'].'/ixtapaluca'.'/php/includes/pie.php');
}
function cuerpoFormulario($frm){
	$con=new FuncionesSql();
	if ($frm=="Escuela"  ||
		$frm=="Personal" ||
		$frm=="Supervision"||
		$frm=="Zona"||
		$frm=="contrasenia"||
		$frm=="Ubicacion" ){
		include ($_SERVER['DOCUMENT_ROOT'].'/ixtapaluca'."/php/paginas/formularios/frm".$frm.".min.php");
	}else {
		inicio();
	}
}
function cuerpoTabla($tbls){
	$con=new FuncionesSql();
	if ($tbls=="Escuela"||
		$tbls=="Personal"||
		$tbls=="Zona"||
		$tbls=='Supervision') {
		if (isset($_SESSION['TIPO_USUARIO'])) {
			include ($_SERVER['DOCUMENT_ROOT'].'/ixtapaluca'."/php/paginas/tablas/tbls".$tbls.".min.php");
		} else {
			inicio();
		}
	} else {
		inicio();
	}
}
function buscador($tabla){
	$con=new FuncionesSql();
	if ($tabla=="Cp" ||
		$tabla=="Zona" ||
		$tabla=="ZonaT" ||
		$tabla=="Turno" ||
		$tabla=="Nivel" ||
		$tabla=="Funcion" ||
		$tabla=="Supervision" ||
		$tabla=="Personal" ||
		$tabla=="Escuela" ||
		$tabla=="EscuelaSuper" ||
		$tabla=="Administrador" ||
		$tabla=="CCT" ||
		$tabla=="Detalles" ||
		$tabla=="EscuelaG" ) {
		include ($_SERVER['DOCUMENT_ROOT'].'/ixtapaluca'."/php/buscadores/buscador".$tabla.".php");
	}
}
function sql($tabla){
	$con=new FuncionesSql();
	if ($tabla=="Escuela" ||
		$tabla=="Personal" ||
		$tabla=="PersonalEsc" ||
		$tabla=="Funcion"  ||
		$tabla=="Turno"    ||
		$tabla=="Zona" ||
		$tabla=="Supervision"||
		$tabla=="Ubicacion") {
		include ($_SERVER['DOCUMENT_ROOT'].'/ixtapaluca'."/php/ejecuta/sql".$tabla.".php");
	} else {
		inicio();
	}
}
function validar($campo){
	$con=new FuncionesSql();
	if ($campo=="Password" ||
		$campo=="Rfc" ||
		$campo=="PersonalEsc" ||
		$campo=="Funcion"  ||
		$campo=="Turno"    ||
		$campo=="Zona" ||
		$campo=="Supervision"||
		$campo=="Ubicacion") {
		include ($_SERVER['DOCUMENT_ROOT'].'/ixtapaluca'."/php/validacionesAjax/validar".$campo.".php");
	}else{
		inicio();
	}
}
function noLogueado(){
		header('HTTP/1.1 401 Unauthorized');
		include ($_SERVER['DOCUMENT_ROOT'].'/ixtapaluca'."/php/paginas/401.min.php");
	}
	function denegado(){
		header('HTTP/1.1 403 Unauthorized');
		include ($_SERVER['DOCUMENT_ROOT'].'/ixtapaluca'."/php/paginas/403.min.php");
	}
?>