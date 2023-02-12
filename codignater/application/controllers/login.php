<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

	//--metodos constructores, metodos que se ejecutan automaticamente
	public function __construct(){
		parent::__construct();
		//--para llamar varios gelpers-----
		$this->load->helper(array('getmenu','url'));

	}

//pasamos a la vista
	public function index()
	{
		$data['menu']=main_menu();
		$this->load->view('login',$data);
		// $this->load->view('include/asidebar');
		// $this->load->view('include/header');
		// $this->load->view('home');
		// $this->load->view('include/footer');
		
	}
	// public function hola(){
	// 	$resultado=$this->Site_model->getProfesores();
	// 	print_r($resultado);
	// 	// echo base_url();
	// }
}
