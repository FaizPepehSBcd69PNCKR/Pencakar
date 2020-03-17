<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cv_karyawan extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_cv_karyawan');
	}

	
	// index
	function index()
	{
		$data = array(
			'cakarhmvc' 		=> "Cv_karyawan",
			'cakarhmvcview' 	=> "v_cv_karyawan",
			'tampil'			=> $this->m_cv_karyawan->tampil()
		);
		echo Modules::run('template/tampilcore_front_end', $data);
	}
	function tambah(){
		$this->m_cv_karyawan->tambahh();
		// redirect('Cv_karyawan');
			}
}
