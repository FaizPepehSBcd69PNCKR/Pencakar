<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_p_karyawan_saya extends CI_Model {

	function tampil($limit ,$start)
	{
		$this->db->select('*');
		$this->db->from('cv');
		$this->db->join('rl_karyawan','cv.id_rl_karyawan=rl_karyawan.id_rl_karyawan');
		$this->db->limit($limit, $start);
		$query = $this->db->get();
		return $query->result();
	}
	function jumlah_data()
	{
		$this->db->select('*');
		$this->db->from('cv');
		$this->db->join('rl_karyawan','rl_karyawan.id_rl_karyawan=cv.id_rl_karyawan');
		$query = $this->db->get();
		return $query->num_rows();
	}

	function hapus($id_cv)
	{
		$this->db->where('id_cv', $id_cv)->delete('cv');
	}
}