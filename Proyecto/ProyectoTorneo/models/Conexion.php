<?php
 class Conexion{

 	function Conexion(){
 		$this->db = ADONewConnection('mysql');
 		$this->db->debug = true;

 						  //host,       db,         usuario, password
 		$this->db->Connect('localhost','prograweb','root','1111'); 

 	}
 }


?>