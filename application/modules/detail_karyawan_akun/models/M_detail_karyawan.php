<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_detail_karyawan extends CI_Model {

	function tampil()
	{
		$this->db->select('*');
		$this->db->from('cv');
		$this->db->join('rl_karyawan','rl_karyawan.id_rl_karyawan=cv.id_rl_karyawan');
		$this->db->join('alamat','alamat.id_cv=cv.id_cv');
		$this->db->join('pendidikan','pendidikan.id_cv=cv.id_cv');
		$this->db->join('pengalaman_kerja','pengalaman_kerja.id_cv=cv.id_cv');
		$query = $this->db->get();
		return $query->result();
	}
}