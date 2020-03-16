<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cakar_login extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_cakar_login');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "cakar_login",
			'namafileview' 	=> "V_cakar_login",
			'tampil'		=> $this->m_cakar_login->tampil(),
		);
		echo Modules::run('template/view_template_core7', $data);
	}

	function aksi_login(){
		$nomor_telepon  	= $this->input->post('nomor_telepon');
		$kata_sandi 		= $this->input->post('kata_sandi');
		$where = array(
			'nomor_telepon' => $nomor_telepon,
			'kata_sandi' 	=> $kata_sandi
			);
		$sapi=$this->m_cakar_login->taka('rl_karyawan',$where)->num_rows();
		if ($sapi== 1) {
			$data_session = array('nomor_telepon'=>$nomor_telepon,'status' => "login",'authenticated'=> true);
			$this->session->set_userdata($data_session);
			redirect('portal2_index');

		}else{
			echo"<script>alert('Username Atau Password Anda Salah');</script>"; 
		}
		
	}

}

	

