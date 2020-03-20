<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class p_karyawan_saya extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_p_karyawan_saya');
	}

	
	// index
	function index()
	{
		$data = array(
			'akunhmvc' 	=> "p_karyawan_saya",
			'akunhmvcview' 	=> "V_p_karyawan_saya",
			'tampil'        => $this->m_p_karyawan_saya->tampil(),
		);
		echo Modules::run('template/tampilCore_back_end2', $data);
	}
	function hapus($id_cv)
	{
		$this->m_p_karyawan_saya->hapus($id_cv);
	}
}
?>