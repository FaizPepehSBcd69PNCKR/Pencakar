<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class p_profil_saya extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_p_profil_saya');
		 
	}

	
	// index
	function index()
	{
		$data = array(
			'akunhmvc'		 	=> "p_profil_saya",
			'akunhmvcview' 	    => "V_p_profil_saya",
			'tampil'        	=> $this->m_p_profil_saya->tampil(),
		);
		echo Modules::run('template/tampilCore_back_end2', $data);
	}

	function taka()
	{
		$this->m_p_profil_saya->edit();
		redirect('p_profil_saya');
	}
	
}
?>