<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_karyawan_akun extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_detail_karyawan');
	}

	
	// index
	function index()
	{
		$data = array(
			'akunhmvc' 			=> "Detail_karyawan_akun",
			'akunhmvcview' 		=> "v_detail_karyawan",
			'tampil'			=> $this->m_detail_karyawan->tampil()
		);
		echo Modules::run('template/tampilCore_back_end', $data);
	}
}