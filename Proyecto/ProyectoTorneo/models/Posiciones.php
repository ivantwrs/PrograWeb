<?php
 class Posiciones extends Modelo{

 	public $nombre_tabla = "Posiciones";
 	public $pk = "id_Tabla";

 	public $atributos = $array(
 						'Equipo'=>$array(),
 						'JJ'=>$array(),
 						'JG'=>$array(),
 						'JE'=>$array(),
 						'JP'=>$array(),
 						'GF'=>$array(),
 						'GC'=>$array(),
 						'DFC'=>$array(),
 						'JPD'=>$array(),
 						'Puntos'=>$array(),
 		);

 	private $Equipo;
 	private $JJ;
 	private $JG;
 	private $JE;
 	private $JP;
 	private $GF;
	private $GC;
 	private $DFC;
 	private $JPD;
	private $Puntos;

 	function Posiciones(){
 		parent::Modelo();
 	}

 	public function set_equipo($valor){
 		$this->Equipo = $valor;
 	}

 	public function get_equipo(){
 		return $this->Equipo;
 	}

 	public function set_jugados($valor){
 		$this->JJ = $valor;
 	}

 	public function get_jugados(){
 		return $this->JJ;
 	}

 	public function set_ganados($valor){
 		$this->JG = $valor;
 	}

 	public function get_ganados(){
 		return $this->JG;
 	}

 	public function set_empatados($valor){
 		$this->JE = $valor;
 	}

 	public function get_empatados(){
 		return $this->JE;
 	}

 	public function set_perdidos($valor){
 		$this->JP = $valor;
 	}

 	public function get_perdidos(){
 		return $this->JP;
 	}

 	public function set_gf($valor){
 		$this->GF = $valor;
 	}

 	public function get_gf(){
 		return $this->GF;
 	}

 	public function set_gc($valor){
 		$this->GC = $valor;
 	}

 	public function get_gc(){
 		return $this->GC;
 	}

 	public function set_dfc($valor){
 		$this->DFC = $valor;
 	}

 	public function get_dfc(){
 		return $this->DFC;
 	}

 	public function set_jpd($valor){
 		$this->JPD = $valor;
 	}

 	public function get_jpd(){
 		return $this->JPD;
 	}

 	public function set_puntos($valor){
 		$this->Puntos = $valor;
 	}

 	public function get_puntos(){
 		return $this->Puntos;
 	}

}

?>
