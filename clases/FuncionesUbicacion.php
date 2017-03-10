<?php
trait FuncionesUbicacion{
	public function acUbicacion($cct ,$latitud ,$longitud ,$heading ,$pitch ,$direccion ,$id_asentamiento ){
		return $sql = $this->query("UPDATE ubicacion SET
							latitud         = '".$this->MRES($latitud)."',
							longitud        = '".$this->MRES($longitud)."',
							heading         = '".$this->MRES($heading)."',
							pitch           = '".$this->MRES($pitch)."',
							direccion       = '".$this->MRES($direccion)."' ,
							id_asentamiento = ".$this->MRES($id_asentamiento)."
							WHERE cct       = '".$this->MRES($cct)."'");
	}
	public function inUbicacion($cct){
		return $sql = $this->query("INSERT INTO ubicacion (id_ubicacion, latitud, longitud, heading, pitch, direccion, cct, id_asentamiento)
			VALUES (NULL, '19.3170351', '-98.8794555',
			 '104.93052220567898', '-2.8160690472411276',
			  NULL,'".$this->MRES($cct)."',76)");
	}
}?>