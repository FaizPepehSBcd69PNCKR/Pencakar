<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proses_interview extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_proses_interview');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "proses_interview",
			'namafileview' 	=> "V_proses_interview",
			'tampil'        => $this->m_proses_interview->tampil(),
		);
		echo Modules::run('template/tampilCore2', $data);
	}
	
	function tambah()
	{
		$this->m_data_guru->tambah();
		redirect('proses_interview');
	}

	function edit()
	{
		$this->m_data_guru->edit();
		redirect('proses_interview');
	}

	function hapus($id)
	{
		$this->m_data_guru->hapus($id);
		redirect('proses_interview');
	}
}
?>