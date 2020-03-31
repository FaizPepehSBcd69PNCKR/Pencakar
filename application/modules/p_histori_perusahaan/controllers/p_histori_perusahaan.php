<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class p_histori_perusahaan extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_p_histori_perusahaan');
	}

	
	// index
	function index()
	{

		//pagination
		$jumlah_data = $this->m_p_histori_perusahaan->jumlah_data();
		$config['base_url'] = base_url().'p_histori_perusahaan/index';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 2;

		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);

		$data = array(
			'akunhmvc' 		=> "p_histori_perusahaan",
			'akunhmvcview' 	=> "V_p_histori_perusahaan",
			'tampil'        => $this->m_p_histori_perusahaan->tampil($config['per_page'],$from),
		);
		echo Modules::run('template/tampilCore_back_end2', $data);
	}
}
?>