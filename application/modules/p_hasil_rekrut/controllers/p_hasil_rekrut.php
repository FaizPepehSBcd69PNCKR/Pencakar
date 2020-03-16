<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class p_hasil_rekrut extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_p_hasil_rekrut');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "p_hasil_rekrut",
			'namafileview' 	=> "V_p_hasil_rekrut",
			'tampil'        => $this->m_p_hasil_rekrut->tampil(),
		);
		echo Modules::run('template/tampilCore3', $data);
	}
	
	function tambah()
	{
		$this->m_data_guru->tambah();
		redirect('p_hasil_rekrut');
	}

	function edit()
	{
		$this->m_data_guru->edit();
		redirect('p_hasil_rekrut');
	}

	function hapus($id)
	{
		$this->m_data_guru->hapus($id);
		redirect('p_hasil_rekrut');
	}
}
?>