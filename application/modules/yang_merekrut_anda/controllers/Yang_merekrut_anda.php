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

		//pagination
		$jumlah_data = $this->m_yang_merekrut_anda->jumlah_data();
		$config['base_url'] = base_url().'yang_merekrut_anda/index';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 2;

		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);

		//view index
		$data = array(
			'akunhmvc' 		=> "yang_merekrut_anda",
			'akunhmvcview' 	=> "v_yang_merekrut_anda",
			'tampil'        => $this->m_yang_merekrut_anda->tampil($config['per_page'],$from),
		);
		echo Modules::run('template/tampilCore_back_end', $data);
	}
}