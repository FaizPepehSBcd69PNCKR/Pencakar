<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_cakar_login extends CI_Model {

	function tampil()
	{
		return $this->db->get('rl_karyawan')->result();
	}

	function taka($table,$where){		
		return $this->db->get_where($table,$where);
	}	
	
	
}