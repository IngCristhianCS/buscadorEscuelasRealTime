<?php
trait FuncionesLogueo{
	public function seLogueo($usuario,$password){
		return $sql=$this->query("select * from supervision_vw where usuario COLLATE utf8_bin ='".$this->MRES($usuario)."' and password='".$this->MRES(md5($password))."' ");
	}
	public function inLogueo($cct,$id_zona){
		$sql = $this->seZonaId($id_zona);
		$resultados_row = $this->fetch_array($sql);
		$zona = $resultados_row['zona'];
		return $this->query("INSERT INTO logueo (id_logueo, usuario, password, tipo_usuario, cct) VALUES
							(NULL,
							'supervision".$this->MRES($zona)."',
							'".md5("supervision".$this->MRES($zona))."',
							'supervision',
							'".$this->MRES($cct)."')");
	}
	public function acLogueo($cct,$id_zona){
		$sql = $this->seZonaId($id_zona);
		$resultados_row = $this->fetch_array($sql);
		$zona = $resultados_row['zona'];
		return $this->query("update logueo set
			usuario   = 'supervision".$this->MRES($zona)."',
			password     = '".md5("supervision".$this->MRES($zona))."'
			where cct = '".$this->MRES($cct)."'");
	}
	public function acContrasenia($cct,$contrasenia){
		return $this->query("update logueo set 
				password      ='".md5($contrasenia)."' 
				where cct = '".$this->MRES($cct)."'");
	}
}
?>