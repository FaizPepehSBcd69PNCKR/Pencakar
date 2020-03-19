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
		$data = array(
			'akunhmvc' 		=> "p_histori_perusahaan",
			'akunhmvcview' 	=> "V_p_histori_perusahaan",
			'tampil'        => $this->m_p_histori_perusahaan->tampil(),
		);
		echo Modules::run('template/tampilCore_back_end2', $data);
	}
}
?>