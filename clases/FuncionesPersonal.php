<?php
trait FuncionesPersonal{
	public function inPersonal($nombre,$paterno,$materno,$rfc,$id_funcion){
		$sql = $this->query("insert into personal values(
			'".$this->MRES($rfc)."',
			'".$this->MRES($nombre)."',
			'".$this->MRES($paterno)."',
			'".$this->MRES($materno)."',
			".$this->MRES($id_funcion).")");
		return $sql;
	}
	public function acPersonal($nombre,$paterno,$materno,$rfc,$id_funcion,$rfc_m){
		return $this->query("update personal set
			rfc        ='".$this->MRES($rfc)."',
			nombre_p   ='".$this->MRES($nombre)."',
			a_paterno  ='".$this->MRES($paterno)."',
			a_materno  ='".$this->MRES($materno)."',
			id_funcion =".$this->MRES($id_funcion)."
			WHERE rfc  ='".$this->MRES($rfc_m)."'");
	}
	public function elPersonal($rfc){
		return $this->query("delete from personal where rfc= '".$this->MRES($rfc)."'");
	}
	public function inPerEsc($rfc,$cct,$sueldo){
		 return $this->query("insert into personal_escuela values(
			'".$rfc."','".$cct."','".$sueldo."')");
	}
	public function acPerEsc($rfc,$cct,$sueldo,$cct_m){
		return $this->query("update personal_escuela set
			cct='".$cct."',sueldo='".$sueldo."'
			where rfc='".$rfc."' and cct='".$cct_m."'");
	}
	public function elPerEsc($rfc,$cct_m){
		return $this->query("delete from personal_escuela
			where rfc='".$rfc."' and cct='".$cct_m."'");
	}
	public function sePersonal(){
		if ($_SESSION['CCT']=='DIREDUIXTA') {
			$sql=$this->query("select * from personal_vw");
		}
		return $sql;
	}
	public function sePersona($rfc){
		return $this->query("select * from personal_vw where rfc='".$this->MRES($rfc)."'");
	}
	public function sePersonalBusc($campo,$valor){
		if ($_SESSION['CCT']=='DIREDUIXTA') {
			$sql=$this->query("select * from personal_vw where ".$this->MRES($campo)."  like  '%".$this->MRES($valor)."%' order by ".$this->MRES($campo)." limit 10");
		}
		return $sql;
	}
	public function sePerEsc(){
		return $this->query("select * from per_esc_vw");
	}
	public function sePersonalEsc($rfc){
		return $this->query("select * from per_esc_vw where rfc='".$this->MRES($rfc)."'");
	}
	public function sePersonalEscM($rfc,$cct){
		return $this->query("select * from per_esc_vw where rfc='".$this->MRES($rfc)."' and cct= '".$this->MRES($cct)."'");
	}
}?>