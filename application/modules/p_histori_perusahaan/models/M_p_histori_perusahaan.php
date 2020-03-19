<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_p_histori_perusahaan extends CI_Model {

	function tampil()
	{
		return $this->db->get('rl_perusahaan')->result();
	}
}
