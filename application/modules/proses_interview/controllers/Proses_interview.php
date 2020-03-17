<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proses_interview extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_proses_interview');
		
	}

	
	// index
	function index()
	{
		$data = array(
			'akunhmvc' 		=> "Proses_interview",
			'akunhmvcview' 	=> "V_proses_interview",
			'tampil'        => $this->m_proses_interview->tampil(),
		);
		echo Modules::run('template/tampilCore_back_end', $data);
	}
	function pesan_karyawan()
	{
		$this->m_proses_interview->pesan_karyawan();
	}
}