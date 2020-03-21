<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cakar_perusahaan_portal3 extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_cakar_perusahaan');
	}

	
	// index
	function index()
	{
		$data = array(
			'cakarhmvc' 		=> "Cakar_perusahaan_portal3",
			'cakarhmvcview' 	=> "v_cakar_perusahaan",
			'tampil'			=> $this->m_cakar_perusahaan->tampil()
		);
		echo Modules::run('template/tampilcore_front_end3', $data);
	}
	function tampil($id)
	{
		$this->m_cakar_perusahaan->data($id);
	}
}
