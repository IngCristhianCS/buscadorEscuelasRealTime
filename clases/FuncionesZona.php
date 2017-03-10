<?php
trait FuncionesZona{
	public function inZona($zona,$id_nivel,$subsistema){
		$sql = $this->query("insert into cat_zona values(null,
			'".$this->MRES($zona)."',
			".$this->MRES($id_nivel).",
			'".$this->MRES($subsistema)."')");
		return $sql;
	}
	public function acZona($id_zona,$zona,$id_nivel,$subsistema){
		return $sql = $this->query("update cat_zona set
			zona          ='".$this->MRES($zona)."',
			id_nivel      =".$this->MRES($id_nivel).",
			subsistema    ='".$this->MRES($subsistema)."'
			where id_zona =".$this->MRES($id_zona));
	}
	public function seZonaId($id_zona){
		return $this->query("select *
			from  zonas_vw WHERE
			id_zona =".$this->MRES($id_zona)."");
	}
	public function seZona($zona){
		return $this->query("Select * from zonas_vw cz where exists (select 1 from supervision s where s.id_zona = cz.id_zona) and cz.zona like '".$this->MRES($zona)."%' and cz.zona!='DIRECCION'");
	}
	public function seZonaBF($zona){
		return $this->query("Select * from zonas_vw cz where not exists (select 1 from supervision s where s.id_zona = cz.id_zona) and cz.zona like '".$this->MRES($zona)."%' and cz.zona!='DIRECCION'");
	}
	public function seZonaT($zona){
		return $this->query("Select * from zonas_vw where zona like '".$this->MRES($zona)."%' and zona!='DIRECCION'");
	}
	public function seZonaNom($zona){
		return $this->query("Select * from zonas_vw where zona = '".$this->MRES($zona)."' and zona!='DIRECCION'");
	}
	public function seZonas(){
		return $this->query("select *
			from  zonas_vw where zona!='DIRECCION' order by zona");
	}
	public function elZona($id_zona){
		return $this->query("delete from cat_zona where id_zona=".$id_zona);
	}
}?>