<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tempat_bekerja extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_tempat_bekerja');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "tempat_bekerja",
			'namafileview' 	=> "V_tempat_bekerja",
			'tampil'        => $this->m_tempat_bekerja->tampil(),
		);
		echo Modules::run('template/tampilCore2', $data);
	}
	
	function tambah()
	{
		$this->m_data_guru->tambah();
		redirect('data_guru');
	}

	function edit()
	{
		$this->m_data_guru->edit();
		redirect('data_guru');
	}

	function hapus($id)
	{
		$this->m_data_guru->hapus($id);
		redirect('data_guru');
	}
}
?>