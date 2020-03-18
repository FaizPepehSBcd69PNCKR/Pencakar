<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class p_calon_karyawan extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_p_calon_karyawan');
	}

	
	// index
	function index()
	{
		$data = array(
			'akunhmvc' 	=> "p_calon_karyawan",
			'akunhmvcview' 	=> "V_p_calon_karyawan",
			'tampil'        => $this->m_p_calon_karyawan->tampil(),
		);
		echo Modules::run('template/tampilCore_back_end2', $data);
	}
	function pesan_karyawan()
	{
		$this->m_proses_interview->pesan_karyawan();
	}
	
}