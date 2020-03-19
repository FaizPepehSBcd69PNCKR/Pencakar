<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_p_karyawan_saya extends CI_Model {

	function tampil()
	{
		return $this->db->get('rl_perusahaan')->result();
	}
}