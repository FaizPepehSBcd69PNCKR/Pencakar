<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_profil_saya extends CI_Model {

	function tampil()
	{
		$this->db->select('*');
		$this->db->from('rl_karyawan');
		$this->db->join('cv','rl_karyawan.id_rl_karyawan=cv.id_rl_karyawan');
		$query = $this->db->get();
		return $query->result();
	}

	function edit()
	{
		//id rl karyawan, id cv
		$id      		= $this->input->post('id_rl_karyawan');
		$id2 			= $this->input->post('id_cv');
		//username
		$nama    		= $this->input->post('nama_lengkap');
		$nomor_telepon	= $this->input->post('nomor_telepon');
		//cv
		$email    		= $this->input->post('email');
		$tentang_saya	= $this->input->post('tentang_saya');

		// edit username
		$data   = array('nama_lengkap' 			=> $nama,
		 				'nomor_telepon' 		=> $nomor_telepon,
		  			);

		$this->db->where('id_rl_karyawan',$id)->update('rl_karyawan',$data);

		// edit cv
		$data2   = array('email' 			=> $email,
		 				'tentang_saya' 		=> $tentang_saya,
		  			);

		$this->db->where('id_cv',$id2)->update('cv',$data2);

		
	}
}