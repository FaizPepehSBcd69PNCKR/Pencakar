<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class bantuan extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_k_bantuan');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "bantuan",
			'namafileview' 	=> "V_k_bantuan",
			'tampil'        => $this->m_k_bantuan->tampil(),
		);
		echo Modules::run('template/tampilCore2', $data);
	}
	
	function tambah()
	{
		$this->m_data_guru->tambah();
		redirect('edit_cv');
	}

	function edit()
	{
		$this->m_data_guru->edit();
		redirect('edit_cv');
	}

	function hapus($id)
	{
		$this->m_data_guru->hapus($id);
		redirect('edit_cv');
	}
}
?>