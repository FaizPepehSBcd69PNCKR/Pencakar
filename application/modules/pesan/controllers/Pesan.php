<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesan extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_pesan');
		 
	}

	
	// index
	function index()
	{
		$data = array(
			'akunhmvc'		 	=> "pesan",
			'akunhmvcview' 	    => "V_pesan",
			'tampil'        	=> $this->m_pesan->tampil(),
		);
		echo Modules::run('template/tampilCore_frontend', $data);
	}
	function alasan_karyawan()
	{
		$this->m_pesan->alasan_karyawan();
		redirect('profil_saya');
	}
}