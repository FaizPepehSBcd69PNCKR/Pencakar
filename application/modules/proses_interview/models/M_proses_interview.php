<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_proses_interview extends CI_Model {

	function tampil()
	{
		return $this->db->get('rl_perusahaan')->result();
	}
	function pesan_karyawan()
	{
		$pesan =$this->input->post('isi_pesan');

		$data = array(
			'isi_pesan' => $pesan, );

		$this->db->insert('pesan_interview', $data);
	}
}