<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class portal1_index extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_portal1_index');

	}

	
	// index
	function index()
	{
		$data = array(
			'cakarhmvc' 	=> "portal1_index",
			'cakarhmvcview' 	=> "V_portal1_index",
			'tampil'		=> $this->m_portal1_index->tampil(),
		);
		echo Modules::run('template/tampilCore_front_end', $data);
	}
	
}
 