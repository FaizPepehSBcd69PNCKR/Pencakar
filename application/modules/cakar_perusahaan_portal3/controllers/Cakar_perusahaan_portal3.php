<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cakar_perusahaan_portal3 extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_cakar_perusahaan');
	}

	
	// index
	function index()
	{

		//pagination
		$jumlah_data = $this->m_cakar_perusahaan->jumlah_data();
		$config['base_url'] = base_url().'Cakar_perusahaan_portal3/index';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 6;

		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);

		$data = array(
			'cakarhmvc' 		=> "Cakar_perusahaan_portal3",
			'cakarhmvcview' 	=> "v_cakar_perusahaan",
			'tampil'			=> $this->m_cakar_perusahaan->tampil($config['per_page'],$from)
		);
		echo Modules::run('template/tampilcore_front_end3', $data);
	}
}
