<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_cakar_perusahaan extends CI_Model {

	function tampil()
	{
		$this->db->select('*');
		$this->db->from('cv');
		$this->db->join('rl_karyawan','rl_karyawan.id_rl_karyawan=cv.id_rl_karyawan');
		$this->db->join('alamat','alamat.id_cv=cv.id_cv');
		$query = $this->db->get();
		return $query->result();
	}
	function data($id)
	{
		$this->db->select('*');
		$this->db->from('cv');
		$this->db->join('rl_karyawan','rl_karyawan.id_rl_karyawan=cv.id_rl_karyawan');
		$this->db->join('alamat','alamat.id_cv=cv.id_cv');
		$this->db->where('id_cv',$id);
		$query = $this->db->get();
		return $query->result();

	}
}