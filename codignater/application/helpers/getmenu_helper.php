<?php
function main_menu(){
	return array(
		//login
		array(
			'title'=>'Login',
			'url'=>base_url()
		),
		//registro
		array(
			'title'=>'Registro',
			'url'=>base_url('index.php/registro')
		), 
	);
	
}