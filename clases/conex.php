<?php
class Conex{
	public $conexion;
	function __construct(){
		$this->conexion=mysqli_connect("localhost","root","","ixtapaluca0");

		if (mysqli_connect_errno()){
			print "Error en la conexión: ".mysqli_connect_error();
			exit();
		}
		mysqli_set_charset($this->conexion,"utf8");
	}
	function __destruct(){
		mysqli_close( $this->conexion);
	}
	public function MRES($valor){
		return mysqli_real_escape_string($this->conexion,trim($valor));
	}
	public function query($sql){
		return mysqli_query($this->conexion,$sql);
	}
	public function fetch_array($sql){
		return mysqli_fetch_array($sql);
	}
	public function fetch_object($sql){
		return mysqli_fetch_object($sql);
	}
	public function num_rows($sql){
		return mysqli_num_rows($sql);
	}
}
?>