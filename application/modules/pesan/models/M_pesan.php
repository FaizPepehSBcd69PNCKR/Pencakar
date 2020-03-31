<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pesan extends CI_Model {

	function tampil()
	{
		return $this->db->get('pengunduran_diri')->result();
	}
	function alasan_karyawan()
	{
		$alasan_anda 		= $this->input->post('alasan');

		$data = array(
			'alasan' => $alasan_anda,
			 );

		$this->db->insert('pengunduran_diri', $data);
	}
}