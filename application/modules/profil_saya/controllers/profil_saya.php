<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil_saya extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_profil_saya');
		
	}

	
	// index
	function index()
	{
		$data = array(

			'akunhmvc' 		=> "profil_saya",
			'akunhmvcview' 	=> "V_profil_saya",
			'tampil'        => $this->m_profil_saya->tampil(),
		);
		echo Modules::run('template/tampilCore_back_end2', $data);
	}
	
	function tambah()
	{
		$this->m_data_guru->tambah();
		redirect('edit_cv');
	}

	function edit()
	{
		$this->m_data_guru->edit();
		redirect('edit_cv');

			'akunhmvc' 	=> "profil_saya",
			'akunhmvcview' 	=> "V_profil_saya",
			'tampil'        => $this->m_profil_saya->tampil(),
		);
		echo Modules::run('template/tampilCore_back_end', $data);

	}

	function edit(){
		$this->m_profil_saya->edit();
	}
	
}
?>