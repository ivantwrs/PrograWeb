<?php
 class Categoria extends Modelo{

 	public $nombre_tabla = "Categoria";
 	public $pk = "id_Categoria";

 	public $atributos = $array(
 						'Tipo'=>$array(),
 		);

 	private $Tipo;

 	function Categoria(){
 		parent::Modelo();
 	}

 	public function set_tip($valor){
 		$this->tipo = $valor;
 	}

 	public function get_tipo(){
 		return $this->tipo;
 	}

}

?>
