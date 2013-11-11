<?php
 class Jornada extends Modelo{

 	public $nombre_tabla = "Jornada";
 	public $pk = "id_Jornada";

 	public $atributos = $array(
 						'Hora'=>$array(),
 						'Fecha'=>$array(),
 		);

 	private $Hora;
 	private $Fecha;

 	function Jornada(){
 		parent::Modelo();
 	}

 	public function set_hora($valor){
 		$this->Hora = $valor;
 	}

 	public function get_hora(){
 		return $this->Hora;
 	}

 	public function set_fecha($valor){
 		$this->Fecha = $valor;
 	}

 	public function get_fecha(){
 		return $this->Fecha;
 	}

?>
