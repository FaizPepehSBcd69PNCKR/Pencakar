<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_cakar_perusahaan extends CI_Model {

	function tampil()
	{
		return $this->db->get('cv')->result();
	}
}