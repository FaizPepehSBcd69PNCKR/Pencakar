<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_proses_interview extends CI_Model {

	function tampil()
	{
		return $this->db->get('rl_perusahaan')->result();
	}
}