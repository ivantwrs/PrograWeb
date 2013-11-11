<?php
 class Delegado extends Modelo{

 	public $nombre_tabla = "Delegado";
 	public $pk = "id_Delegado";

 	public $atributos = $array(
 						'Nom_Del'=>$array(),
 						'Direccion'=>$array(),
 						'Tel'=>$array(),
 		);

 	private $Nom_Del;
 	private $Direccion;
 	private $Tel;

 	function Delegado(){
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
