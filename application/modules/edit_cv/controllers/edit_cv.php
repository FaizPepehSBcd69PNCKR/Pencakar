<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class edit_cv extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_edit_cv');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "edit_cv",
			'namafileview' 	=> "V_edit_cv",
			'tampil'        => $this->m_edit_cv->tampil(),
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