<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template extends MX_Controller {

	function __construct()
	{
		parent:: __construct();
		//load model

		$this->load->model('m_template');
		$this->load->model('login/m_session');
	}

	

	// view core templating
	public function index()
	{
		
		$this->load->view('view_template_core');
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
	public function tampilCore_login($data)
	{
		$id = $this->session->userdata('session_id');
		
		$this->load->view('view_template_login',$data);
	}

	public function tampil_view_template_core($data)
	{
		$id = $this->session->userdata('session_id');
		
		$this->load->view('view_template_core',$data);
	}

	public function tampil_view_template_core6($data)
	{
		$id = $this->session->userdata('session_id');
		
		$this->load->view('view_template_core6',$data);
	}

	public function tampil_view_template_core7($data)
	{
		$id = $this->session->userdata('session_id');
		
		$this->load->view('view_template_core7',$data);
	}

	public function tampil_view_template_core5($data)
	{
		$id = $this->session->userdata('session_id');
		
		$this->load->view('view_template_core5',$data);
	}

	public function tampil_view_template_core4($data)
	{
		$id = $this->session->userdata('session_id');
		
		$this->load->view('view_template_core4',$data);
	}
	public function tampil_view_template_core3($data)
	{
		$id = $this->session->userdata('session_id');
		
		$this->load->view('view_template_core3',$data);
	}

	public function tampil_view_template_core2($data)
	{
		$id = $this->session->userdata('session_id');
		
		$this->load->view('view_template_core2',$data);
	}

	public function tampil_view_template_core($data)
	{
		$id = $this->session->userdata('session_id');
		
		$this->load->view('view_template_core',$data);
	}




}
