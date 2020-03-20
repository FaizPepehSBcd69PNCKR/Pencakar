<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_detail_calon_karyawan3 extends CI_Model {

	function tampil()
	{
		//join table
		$this->db->select('*');
		$this->db->from('cv');
		$this->db->join('rl_karyawan','rl_karyawan.id_rl_karyawan=cv.id_rl_karyawan');
		$this->db->join('alamat','cv.id_cv=alamat.id_cv');
		$this->db->join('pendidikan','cv.id_cv=alamat.id_cv');
		$this->db->join('pengalaman_kerja','cv.id_cv=pengalaman_kerja.id_cv');
		$query = $this->db->get();
		return $query->result();
	}
}