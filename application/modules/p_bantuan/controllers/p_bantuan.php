<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class p_bantuan extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_p_bantuan');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "p_bantuan",
			'namafileview' 	=> "V_p_bantuan",
			'tampil'        => $this->m_p_bantuan->tampil(),
		);
		echo Modules::run('template/tampilCore3', $data);
	}
	
	function tambah()
	{
		$this->m_data_guru->tambah();
		redirect('p_bantuan');
	}

	function edit()
	{
		$this->m_data_guru->edit();
		redirect('p_bantuan');
	}

	function hapus($id)
	{
		$this->m_data_guru->hapus($id);
		redirect('p_bantuan');
	}
}
?>