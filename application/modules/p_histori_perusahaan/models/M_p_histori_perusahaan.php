<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_p_histori_perusahaan extends CI_Model {

	function tampil($limit, $start)
	{
		//join table
		$this->db->select('*');
		$this->db->from('cv');
		$this->db->join('rl_karyawan','rl_karyawan.id_rl_karyawan=cv.id_rl_karyawan');
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
}
