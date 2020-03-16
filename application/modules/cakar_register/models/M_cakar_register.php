<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_cakar_register extends CI_Model {

	function tampil()
	{
		return $this->db->get('rl_karyawan')->result();
	}

	function register_karyawan(){
		$nama_lengkap=$this->input->post('nama_lengkap');
		$kata_sandi=$this->input->post('kata_sandi');
		$nomor_telepon=$this->input->post('nomor_telepon');
		$status='karyawan';
		$user = array('nama_lengkap'	 	=>$nama_lengkap,
					  'kata_sandi'			=>$kata_sandi,
					  'nomor_telepon'		=>$nomor_telepon,
					  'status' 	 			=>'karyawan'
					  
		 );
		
		$this->db->insert('rl_karyawan',$user);

	}

}