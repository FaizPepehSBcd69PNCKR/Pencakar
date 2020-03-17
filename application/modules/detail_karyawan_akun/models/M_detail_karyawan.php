<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_detail_karyawan extends CI_Model {

	function tampil()
	{
		return $this->db->get('cv')->result();
	}
}