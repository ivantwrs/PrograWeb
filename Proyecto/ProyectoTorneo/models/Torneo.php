<?php
 class Torneo extends Modelo{

 	public $nombre_tabla = "Torneo";
 	public $pk = "id_Torneo";

 	public $atributos = $array(
 						'Horario'=>$array(),
 						'Fecha'=>$array(),
 						'Equipo1'=>$array(),
 						'Equipo2'=>$array(),
 						'Categoria'=>$array(),
 		);

 	private $Horario;
 	private $Fecha;
 	private $Equipo1;
 	private $Equipo2;
 	private $Categoria;


 	function Torneo(){
 		parent::Modelo();
 	}

 	public function set_horario($valor){
 		$this->Horario = $valor;
 	}

 	public function get_horario(){
 		return $this->Horario;
 	}

 	public function set_fecha($valor){
 		$this->Fecha = $valor;
 	}

 	public function get_fecha(){
 		return $this->Fecha;
 	}

 	public function set_equipo1($valor){
 		$this->Equipo1 = $valor;
 	}

 	public function get_equipo1(){
 		return $this->Equipo1;
 	}

 	public function set_equipo2($valor){
 		$this->Equipo2 = $valor;
 	}

 	public function get_equipo2(){
 		return $this->Equipo2;
 	}

 	public function set_categoria($valor){
 		$this->Categoria = $valor;
 	}

 	public function get_categoria(){
 		return $this->Categoria;
 	}

}

?>
