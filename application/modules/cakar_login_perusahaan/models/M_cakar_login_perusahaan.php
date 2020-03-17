<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_cakar_login_perusahaan extends CI_Model {

	function tampil()
	{
		return $this->db->get('rl_perusahaan')->result();
	}

	function taka($table,$where){		
		return $this->db->get_where($table,$where);
	}	
	
	
}