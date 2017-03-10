<?php
trait FuncionesSupervision{
	public function seSupervision($cct){
		return $sql=$this->query("select * from supervision_vw where cct='".$this->MRES($cct)."'");
	}
	public function seSupervisiones(){
		return $sql=$this->query("select * from supervision_vw where cct != 'DIREDUIXTA'");
	}
	public function inSupervision($cct,$sede,$oficina,$num_escuelas,$num_grupos,$num_alumnos,$id_zona){
		$sql = $this->query("INSERT INTO supervision (cct,sede,oficina,num_escuelas,num_grupos,num_alumnos,id_zona)
								VALUES (
									'".$this->MRES($cct)."',
									'".$this->MRES($sede)."',
									'".$this->MRES($oficina)."',
									'".$this->MRES($num_escuelas)."',
									'".$this->MRES($num_grupos)."',
									'".$this->MRES($num_alumnos)."',
									".$this->MRES($id_zona).")");
		return $this->inLogueo($cct,$id_zona);
	}
	public function acSupervision($cct,$sede,$oficina,$num_escuelas,$num_grupos,$num_alumnos,$id_zona,$cct_antiguo){
		if ($id_zona!=null) {
			$sql = $this->query("UPDATE supervision SET
							cct          = '".$this->MRES($cct)."',
							sede         = '".$this->MRES($sede)."',
							oficina      = '".$this->MRES($oficina)."',
							num_escuelas = '".$this->MRES($num_escuelas)."',
							num_grupos   = '".$this->MRES($num_grupos)."',
							num_alumnos  = '".$this->MRES($num_alumnos)."',
							id_zona      = ".$this->MRES($id_zona)."
							WHERE cct    = '".$this->MRES($cct_antiguo)."'");
			return $this->acLogueo($cct,$id_zona);
		} else {
			return $sql = $this->query("UPDATE supervision SET
							cct          = '".$this->MRES($cct)."',
							sede         = '".$this->MRES($sede)."',
							oficina      = '".$this->MRES($oficina)."',
							num_escuelas = '".$this->MRES($num_escuelas)."',
							num_grupos   = '".$this->MRES($num_grupos)."',
							num_alumnos  = '".$this->MRES($num_alumnos)."'
							WHERE cct    = '".$this->MRES($cct_antiguo)."'");
		}
	}
	public function seSupervisionBusc($campo,$valor){
		return $this->query("select * from supervision_vw where ".$this->MRES($campo)."  like  '%".$this->MRES($valor)."%' and cct!='DIREDUIXTA' order by ".$this->MRES($campo)." limit 10");
	}
	public function elSupervision($cct){
		$this->query("delete from logueo where cct='".$this->MRES($cct)."'");
		return $this->query("delete from supervision where cct='".$this->MRES($cct)."'");
	}
} ?>