?>

<?php
 class Jugador extends Modelo{

 	public $nombre_tabla = "Jugador";
 	public $pk = "id_Jugador";

 	public $atributos = $array(
 						'Nombre'=>$array(),
 						'Direccion'=>$array(),
 						'Telefono'=>$array(),
 		);

 	private $Nombre;
 	private $Direccion;
 	private $Telefono;

 	function Jugador(){
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

 	public function set_telefono($valor){
 		$this->Telefono = $valor;
 	}

 	public function get_telefono(){
 		return $this->Telefono;
 	}

}

?>
