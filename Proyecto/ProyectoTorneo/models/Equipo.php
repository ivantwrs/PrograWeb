<?php
 class Equipo extends Modelo{

 	public $nombre_tabla = "Equipo";
 	public $pk = "id_Equipo";

 	public $atributos = $array(
 						'Nom_Equipo'=>$array(),
 						'Playera'=>$array(),
 						'Short'=>$array(),
 						'Medias'=>$array(),
 		);

 	private $Nom_Equipo;
 	private $Playera;
 	private $Short;
 	private $Medias;

 	function Equipo(){
 		parent::Modelo();
 	}

 	public function set_nombreEquipo($valor){
 		$this->Nom_Equipo= $valor;
 	}

 	public function get_nombreEquipo(){
 		return $this->Nom_Equipo;
 	}

 	public function set_playera($valor){
 		$this->Playera = $valor;
 	}

 	public function get_playera(){
 		return $this->Playera;
 	}

 	public function set_short($valor){
 		$this->Short = $valor;
 	}

 	public function get_short(){
 		return $this->Short;
 	}

 	public function set_medias($valor){
 		$this->Medias = $valor;
 	}

 	public function get_medias(){
 		return $this->Medias;
 	}

}

?>
