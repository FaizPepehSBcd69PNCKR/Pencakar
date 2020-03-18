<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_p_calon_karyawan extends CI_Model {

	function tampil()
	{
		$this->db->select('*');
		$this->db->from('cv');
		$this->db->join('rl_karyawan','rl_karyawan.id_rl_karyawan=cv.id_rl_karyawan');
		$query = $this->db->get();
		return $query->result();
	}
	function pesan_karyawan()
	{
		$pesan =$this->input->post('isi_pesan');

		$data = array(
			'isi_pesan' => $pesan, );

		$this->db->insert('pesan_interview', $data);
	}
}