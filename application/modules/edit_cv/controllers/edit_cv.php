<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_cv extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_edit_cv');
	}

	
	// index
	function index()
	{
		$data = array(
			'akunhmvc' 			=> "edit_cv",
			'akunhmvcview' 		=> "v_edit_cv",
			'tampil'        	=> $this->m_edit_cv->tampil(),
		);
		echo Modules::run('template/tampilCore_back_end', $data);
	}
	
	function edit()
	{
		$this->m_edit_cv->edit();
		// redirect('edit_cv');
	}

}