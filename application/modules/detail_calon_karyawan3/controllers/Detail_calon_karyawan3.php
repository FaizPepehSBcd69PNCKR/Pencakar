<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_calon_karyawan3 extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_detail_calon_karyawan3');
	}

	
	// index
	function index()
	{
		$data = array(
			'cakarhmvc' 		=> "detail_calon_karyawan3",
			'cakarhmvcview' 	=> "v_detail_calon_karyawan3",
			'tampil'			=> $this->m_detail_calon_karyawan3->tampil()
		);
		echo Modules::run('template/tampilcore_front_end3', $data);
	}
}
