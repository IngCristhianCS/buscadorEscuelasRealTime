<?php
include ('Conex.php');
include ('FuncionesLogueo.php');
include ('FuncionesSupervision.php');
include ('FuncionesUbicacion.php');
include ('FuncionesEscuela.php');
include ('FuncionesZona.php');
include ('FuncionesPersonal.php');
class FuncionesSql extends Conex {
	use FuncionesLogueo,
	FuncionesSupervision,
	FuncionesUbicacion,
	FuncionesEscuela,
	FuncionesZona,
	FuncionesPersonal;
	public function seCodigo($cod){
		return $this->query("select *
			from cod_ase_view WHERE
			codigo_postal like '".$this->MRES($cod)."%' order by codigo_postal limit 18");
	}
	public function seTurno($turno){
		return $this->query("select *
			from  cat_turno WHERE
			turno like '".$this->MRES($turno)."%' limit 10");
	}
	public function seFuncion($funcion){
		return $this->query("select *
			from  cat_funcion WHERE
			funcion like '".$this->MRES($funcion)."%' limit 10");
	}
	public function seNivel($nivel){
		return $this->query("select *
			from  cat_nivel WHERE
			nivel like '".$this->MRES($nivel)."%' and nivel!='DIRECCION' ORDER BY NIVEL limit 10");
	}
}
