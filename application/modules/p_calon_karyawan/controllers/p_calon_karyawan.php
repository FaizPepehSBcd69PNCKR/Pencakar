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
		//pagination
		$jumlah_data = $this->m_p_calon_karyawan->jumlah_data();
		$config['base_url'] = base_url().'p_calon_karyawan/index';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 2;

		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);

		$data = array(
			'akunhmvc' 	=> "p_calon_karyawan",
			'akunhmvcview' 	=> "V_p_calon_karyawan",
			'tampil'        => $this->m_p_calon_karyawan->tampil($config['per_page'],$from),
		);
		echo Modules::run('template/tampilCore_back_end2', $data);
	}
	function pesan_karyawan()
	{
		$this->m_proses_interview->pesan_karyawan();
		redirect('p_calon_karyawan');
	}
	
}