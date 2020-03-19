<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tempat_bekerja extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_tempat_bekerja');
	}

	
	// index
	function index()
	{
		$data = array(
			'akunhmvc' 			=> "tempat_bekerja",
			'akunhmvcview' 		=> "v_tempat_bekerja",
			'tampil'			=> $this->m_tempat_bekerja->tampil()
		);
		echo Modules::run('template/tampilCore_back_end', $data);
	}
	function hapus($id_rl_perusahaan){
		$this->m_tempat_bekerja->hapus($id_rl_perusahaan);
	}
}