<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_yang_merekrut_anda extends CI_Model {

	public function tampil($limit, $start)
	{
		return $this->db->get('rl_perusahaan',$limit, $start)->result();
	}
	   function jumlah_data(){

        return $this->db->get('rl_perusahaan')->num_rows();

    }
}