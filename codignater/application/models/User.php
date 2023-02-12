<?php
class User extends CI_Model{
	function __construct(){
		$this->load->database();
	}

	public function create($datos){
		$datos=array(
			'nombre_usuario'=>$datos['nombre_usuario'],
			'correro'=>$datos['correro'],
			'contrasena'=>$datos['contrasena'],
			'status'=>1,
			'range'=>2
		);
		//--nombre de la tabla y los datos
		if(!$this->db->insert('Usuarios',$datos)){
			return false;

		}
		return true;

	}
}