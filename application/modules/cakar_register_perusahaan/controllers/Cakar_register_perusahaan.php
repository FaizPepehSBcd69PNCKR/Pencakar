<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cakar_register_perusahaan extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_cakar_register_perusahaan');
		

	}
	// index
	function index()
	{
		$data = array(
			'cakarhmvc' 	=> "cakar_register_perusahaan",
			'cakarhmvcview' => "V_cakar_register_perusahaan",
			'tampil'		=> $this->m_cakar_register_perusahaan->tampil(),
		);
		echo Modules::run('template/view_template_login_register', $data);
	}
	
	function taka12()
	{
		$this->m_cakar_register_perusahaan->register_perusahaan();
		redirect('cakar_login');
		
	}

}
 