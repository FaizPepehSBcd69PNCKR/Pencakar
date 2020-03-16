<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class p_histori_perusahaan extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_p_histori_perusahaan');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "p_histori_perusahaan",
			'namafileview' 	=> "V_p_histori_perusahaan",
			'tampil'        => $this->m_p_histori_perusahaan->tampil(),
		);
		echo Modules::run('template/tampilCore3', $data);
	}
	
	function tambah()
	{
		$this->m_data_guru->tambah();
		redirect('p_histori_perusahaan');
	}

	function edit()
	{
		$this->m_data_guru->edit();
		redirect('p_histori_perusahaan');
	}

	function hapus($id)
	{
		$this->m_data_guru->hapus($id);
		redirect('p_histori_perusahaan');
	}
}
?>