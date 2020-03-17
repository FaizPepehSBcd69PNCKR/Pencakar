<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template extends MX_Controller {

	function __construct()
	{
		parent:: __construct();
		//load model

		$this->load->model('m_template');
		
	}

	

	// view core templating
	public function index()
	{
		
		$this->load->view('view_template_login');
	}

	public function tampilCore_front_end($data)
	{
		$id = $this->session->userdata('session_id');
		
		$this->load->view('view_template_front_end_pengunjung',$data);
	}
	public function tampilCore_front_end2($data)
	{
		$id = $this->session->userdata('session_id');
		
		$this->load->view('view_template_front_end_karyawan',$data);
	}
	public function tampilCore_front_end3($data)
	{
		$id = $this->session->userdata('session_id');
		
		$this->load->view('view_template_front_end_perusahaan',$data);
	}
	public function tampilCore_back_end($data)
	{
		$id = $this->session->userdata('session_id');
		
		$this->load->view('view_template_back_end_karyawan',$data);
	}
	public function tampilCore_back_end2($data)
	{
		$id = $this->session->userdata('session_id');
		
		$this->load->view('view_template_back_end_perusahaan',$data);
	}
	
	public function view_template_login_register($data)
	{
		$id = $this->session->userdata('session_id');
		
		$this->load->view('view_template_core_login_register',$data);
	}

}
