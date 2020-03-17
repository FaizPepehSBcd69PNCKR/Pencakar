<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_profil_saya extends CI_Model {

	function tampil()
	{
		return $this->db->get('rl_karyawan')->result();
	}

	function edit()
	{
		$id      = $this->input->post('id_rl_karyawan');

		$nama    		= $this->input->post('nama_lengkap');
		$nomor_telepon	= $this->input->post('nomor_telepon');
		$email 	 		= $this->input->post('email');

		$data   = array('nama_lengkap' 			=> $nama,
		 				'nomor_telepon' => $nomor_telepon,
		  				'email' 		=> $email
		  			);

		$this->db->where('id_rl_karyawan',$id)->update('rl_karyawan',$data);

		
	}

	// function hapus($id)
	// {
	// 	$this->db->where('id',$id)->delete('data_guru');
	// }
}
?>