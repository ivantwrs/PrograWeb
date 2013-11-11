<?php
 class Dueno extends Modelo{

 	public $nombre_tabla = "Dueno_Equipo";
 	public $pk = "id_Dueno";

 	public $atributos = $array(
 						'Nombre'=>$array(),
 						'Direccion'=>$array(),
 						'Tel'=>$array(),
 		);

 	private $Nombre;
 	private $Direccion;
 	private $Tel;

 	function Dueno(){
 		parent::Modelo();
 	}

 	public function set_nombre($valor){
 		$this->Nombre = $valor;
 	}

 	public function get_nombre(){
 		return $this->Nombre;
 	}

 	public function set_direccion($valor){
 		$this->Direccion = $valor;
 	}

 	public function get_direccion(){
 		return $this->Direccion;
 	}

 	public function set_tel($valor){
 		$this->Tel = $valor;
 	}

 	public function get_tel(){
 		return $this->Tel;
 	}

}

?>
