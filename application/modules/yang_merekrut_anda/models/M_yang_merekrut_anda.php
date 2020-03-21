<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_yang_merekrut_anda extends CI_Model {

	function tampil()
	{
		return $this->db->get('rl_perusahaan')->result();
	}
}