<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class registro extends CI_Controller {
	public function __construct(){
		parent::__construct();
		//--para llamar varios gelpers-----
		$this->load->helper(array('getmenu'));
		// $this->load->database();
		// $query=$this->db->get('usuario');
		// var_dump($query->result());
		//--cargamos la clase usurio--
		$this->load->model('User');
		//---libreria de validacion----
		$this->load->library(array('form_validation'));

	}
	public function index(){
		$data['menu']=main_menu();
		$this->load->view('registro',$data);
	}
	public function create(){
		$username=$this->input->post('username');
		$email=$this->input->post('email');
		$password=$this->input->post('password');
		$password_c=$this->input->post('password_confirm');
		var_dump($username . $email . $password. $password_c);

//-----------------validacion-----------------------

		$config=array(
			array(
				'field'=>'username',
				'label'=>'nombre de usuario',
				'rules'=>'required|alpha_numeric',
				
			),
			array(
				'field'=>'email',
				'label'=>'correo',
				'rules'=>'required|valid_email',
				'errors'=>array(
					'required'=>'el %s es invalido'
				),
			),
		);

		$this->form_validation->set_rules($config);
//------------------------------------
		$datos=array(
			'nombre_usuario'=>$username,
			'correro'=>$email,
			'contrasena'=>$password 
		);
		$data['menu']=main_menu();
		if(!$this->User->create($datos)){
			$data['msg']='error al cargar dato';
			//--pasamos datos a la vista ---
			$this->load->view('registro',$data);

		}
		$data['msg']='registrado correctamente';
		$this->load->view('registro',$data);


	}

}