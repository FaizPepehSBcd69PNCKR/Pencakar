<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class p_profil_saya extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_p_profil_saya');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "p_profil_saya",
			'namafileview' 	=> "V_p_profil_saya",
			'tampil'        => $this->m_p_profil_saya->tampil(),
		);
		echo Modules::run('template/tampilCore3', $data);
	}
	
	function tambah()
	{
		$this->m_data_guru->tambah();
		redirect('p_profil_saya');
	}

	function edit()
	{
		$this->m_data_guru->edit();
		redirect('p_profil_saya');
	}

	function hapus($id)
	{
		$this->m_data_guru->hapus($id);
		redirect('p_profil_saya');
	}
}
?>