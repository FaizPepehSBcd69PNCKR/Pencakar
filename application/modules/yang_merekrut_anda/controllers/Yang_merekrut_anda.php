<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Yang_merekrut_anda extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_yang_merekrut_anda');
	}

	
	// index
	function index()
	{
		$data = array(
			'akunhmvc' 		=> "yang_merekrut_anda",
			'akunhmvcview' 	=> "v_yang_merekrut_anda",
			'tampil'        => $this->m_yang_merekrut_anda->tampil(),
		);
		echo Modules::run('template/tampilCore_back_end2', $data);
	}
}