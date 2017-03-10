<?php
trait FuncionesEscuela{
	public function seEscuela($cct){
		return  $this->query("select * from escuela_vw where cct='".$this->MRES($cct)."'");
	}
	public function seEscuelaSupervision($cct){
		return  $this->query("select * from escuela_vw where supervision_cct='".$this->MRES($cct)."'");
	}
	public function seEscuelasZona(){
		if ($_SESSION['ZONA']=='DIRECCIÓN') {
			return $this->query("select * from escuela_vw");
		} else {
			return $this->query("select * from escuela_vw where zona='".$this->MRES($_SESSION['ZONA'])."'");
		}
	}
	public function seEscuelaBusc($campo,$valor){
		if ($_SESSION['TIPO_USUARIO']=="administrador") {
			$sql=$this->query("select * from escuela_vw where ".$this->MRES($campo)."  like  '%".$this->MRES($valor)."%' order by ".$this->MRES($campo)." limit 10");
		} else {
			$sql=$this->query("select * from escuela_vw where ".$this->MRES($campo)."  like  '%".$this->MRES($valor)."%' and supervision_cct='".$_SESSION['CCT']."' order by ".$this->MRES($campo)." limit 10");
		}
		return $sql;
	}
	public function seEscuelaBuscG($campo,$valor){
		$sql=$this->query("select * from escuela_vw where ".$this->MRES($campo)."  like  '%".$this->MRES($valor)."%' order by ".$this->MRES($campo)." limit 10");
		return $sql;
	}
	public function elEscuela($cct){
		$this->query("delete from escuela where cct='".$this->MRES($cct)."'");
		return $this->query("delete from ubicacion where cct='".$this->MRES($cct)."'");
	}
	public function inEscuela($cct, $nombre, $director, $subdirector, $id_turno,  $telefono, $email,$orgsoc,$id_zona){
		if ($id_zona!=null) {
			$resultado = $this->query("select cct from supervision_vw where id_zona=".$id_zona);
			$resultados_row=$this->fetch_array($resultado);
			$cctsuper=$resultados_row['cct'];
		} else {
			$cctsuper=$_SESSION['CCT'];
		}
		$sql = ("INSERT INTO escuela
		VALUES ('".$this->MRES($cct)."',
			'".$this->MRES($cctsuper)."',
			'".$this->MRES($nombre)."',
			'".$this->MRES($director)."',
		   '".$this->MRES($subdirector)."',
		   '".$this->MRES($telefono)."',
		   '".$this->MRES($email)."',
		   '".$this->MRES($orgsoc)."',
		   '".$this->MRES($id_turno)."')");
		return $this->query ($sql);
	}
	public function acEscuela($cct, $nombre, $director, $subdirector, $id_turno,  $telefono, $email,$orgsoc,$id_zona,$cct_antiguo){
		if ($id_zona!=null) {
			$resultado = $this->query("select cct from supervision_vw where id_zona=".$this->MRES($id_zona));
			$resultados_row=$this->fetch_array($resultado);
			$cctsuper=$resultados_row['cct'];
		} else {
			$cctsuper=$_SESSION['CCT'];
		}
		$sql = ("UPDATE escuela SET
			cct             ='".$this->MRES($cct)."',
			supervision_cct ='".$this->MRES($cctsuper)."',
			nombre          ='".$this->MRES($nombre)."',
			director        ='".$this->MRES($director)."',
			subdirector     ='".$this->MRES($subdirector)."',
			telefono        ='".$this->MRES($telefono)."',
			email           ='".$this->MRES($email)."',
			org_social      ='".$this->MRES($orgsoc)."',
			id_turno        ='".$this->MRES($id_turno)."'
			WHERE cct       = '".$this->MRES($cct_antiguo)."'");
		return $this->query($sql);
	}
}
?>