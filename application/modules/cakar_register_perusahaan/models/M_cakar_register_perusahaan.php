<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_cakar_register_perusahaan extends CI_Model {

	function tampil()
	{
		return $this->db->get('rl_perusahaan')->result();
	}

	function register_perusahaan(){
		$nama_perusahaan=$this->input->post('nama_perusahaan');
		$email_perusahaan=$this->input->post('katasandi_perusahaan');
		$telepon_perusahaan=$this->input->post('telepon_perusahaan');
		$katasandi_perusahaan=$this->input->post('katasandi_perusahaan');
		$alamatlengkap_perusahaan=$this->input->post('alamatlengkap_perusahaan');
		$status='perusahaan';
		$user = array('nama_perusahaan'	 					=>$nama_perusahaan,
					  'katasandi_perusahaan'				=>$katasandi_perusahaan,
					  'telepon_perusahaan'					=>$telepon_perusahaan,
					  'alamatlengkap_perusahaan'			=>$alamatlengkap_perusahaan,
					  'status' 	 							=>'perusahaan'
		 );
		
		$this->db->insert('rl_perusahaan',$user);

	}

}