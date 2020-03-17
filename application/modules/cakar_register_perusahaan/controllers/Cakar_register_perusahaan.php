<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cakar_register_perusahaan extends MX_Controller {

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
			'namamodule' 	=> "cakar_register",
			'namafileview' 	=> "V_cakar_register",
			'tampil'		=> $this->m_cakar_register->tampil(),
		);
		echo Modules::run('template/tampilCore_front_end_', $data);
	}
	
	function taka()
	{
		$this->m_cakar_register->register_karyawan();
		redirect('cakar_login');
		
	}

}
 