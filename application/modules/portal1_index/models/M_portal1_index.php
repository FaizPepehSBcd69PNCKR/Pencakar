<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_portal1_index extends CI_Model {

	function tampil()
	{
		return $this->db->get('index')->result();
	}
}