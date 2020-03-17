<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cakar_register extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_cakar_register');
		

	}
	// index
	function index()
	{
		$data = array(
			'cakarhmvc' 	 	=> "cakar_register",
			'cakarhmvcview' 	=> "V_cakar_register",
			'tampil'			=> $this->m_cakar_register->tampil(),
		);
		echo Modules::run('template/view_template_login_register', $data);
	}
	
	function taka()
	{
		$this->m_cakar_register->register_karyawan();
		redirect('cakar_login');
		
	}

}
 