<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_proses_interview extends CI_Model {

	function tampil()
	{
		return $this->db->get('pesan_interview')->result();
	}

	function tambah()
	{
		$nama    = $this->input->post('nama_guru');
		$alamat	 = $this->input->post('alamat_guru');
		$agama 	 = $this->input->post('agama');

		$data    = array('nama_guru' => $nama, 'alamat_guru' => $alamat, 'agama' => $agama);

		$this->db->insert("data_guru",$data);
	}

	function edit()
	{
		$id      = $this->input->post('id');

		$nama    = $this->input->post('nama_guru');
		$alamat	 = $this->input->post('alamat_guru');
		$agama 	 = $this->input->post('agama');

		$data   = array('nama_guru' => $nama, 'alamat_guru' => $alamat, 'agama' => $agama);

		$this->db->where('id',$id)->update('data_guru',$data);
	}

	function hapus($id)
	{
		$this->db->where('id',$id)->delete('data_guru');
	}
}
?>