<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class yang_merekrut_anda extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_yang_merekrut_anda');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "yang_merekrut_anda",
			'namafileview' 	=> "V_yang_merekrut_anda",
			'tampil'        => $this->m_yang_merekrut_anda->tampil(),
		);
		echo Modules::run('template/tampilCore2', $data);
	}
	
	function tambah()
	{
		$this->m_data_guru->tambah();
		redirect('yang_merekrut_anda');
	}

	function edit()
	{
		$this->m_data_guru->edit();
		redirect('yang_merekrut_anda');
	}

	function hapus($id)
	{
		$this->m_data_guru->hapus($id);
		redirect('yang_merekrut_anda');
	}
}
?>