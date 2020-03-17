<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cakar_login_perusahaan extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_cakar_login_perusahaan');
		 
	}

	
	// index
	function index()
	{
		$data = array(
			'cakarhmvc' 		=> "cakar_login_perusahaan",
			'cakarhmvcview' 	=> "V_cakar_login_perusahaan",
			'tampil'			=> $this->m_cakar_login_perusahaan->tampil(),
		);
		echo Modules::run('template/view_template_login_register', $data);
	}

	function aksi_login(){
		$telepon_perusahaan		  	= $this->input->post('telepon_perusahaan');
		$katasandi_perusahaan 		= $this->input->post('katasandi_perusahaan');
		$where = array(
			'telepon_perusahaan' 	=> $telepon_perusahaan,
			'katasandi_perusahaan' 	=> $katasandi_perusahaan
			);
		$sapi=$this->m_cakar_login_perusahaan->taka('rl_perusahaan',$where)->num_rows();
		if ($sapi== 1) {
			$data_session = array('telepon_perusahaan'=>$telepon_perusahaan,'status' => "login",'authenticated'=> true);
			$this->session->set_userdata($data_session);
			redirect('edit_cv');

		}else{
			echo"<script>alert('Username Atau Password Anda Salah');V_cakar_login_perusahaan</script>"; 
		}
		
	}

}

	

