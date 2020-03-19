<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_tempat_bekerja extends CI_Model {

	function tampil()
	{
		return $this->db->get('rl_perusahaan')->result();
	}
	function hapus($id_rl_perusahaan)
	{
		$this->db->where('id_rl_perusahaan', $id_rl_perusahaan)->delete('rl_perusahaan');
	}
}