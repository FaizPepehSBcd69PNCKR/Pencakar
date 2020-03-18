<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_edit_cv extends CI_Model {

	function tampil()
	{
		$this->db->select('*');
		$this->db->from('cv');
		$this->db->join('rl_karyawan','rl_karyawan.id_rl_karyawan=cv.id_rl_karyawan');
		$this->db->join('alamat','alamat.id_cv=cv.id_cv');
		$this->db->join('pendidikan','pendidikan.id_cv=cv.id_cv');
		$this->db->join('pengalaman_kerja','pengalaman_kerja.id_cv=cv.id_cv');
		$query = $this->db->get();
		return $query->result();
	}

	function edit()
	{
		$id      	 		= $this->input->post('id_cv');

		$tempat_lahir 		= $this->input->post('tempat_lahir');
		$tanggal_lahir		= $this->input->post('tanggal_lahir');
		$jenis_kelamin		= $this->input->post('jenis_kelamin');
		$agama				= $this->input->post('agama');
		$golongan_darah		= $this->input->post('golongan_darah');
		$email				= $this->input->post('email');
		$status				= $this->input->post('status');
		$keahlian			= $this->input->post('keahlian');
		$tentang_saya		= $this->input->post('tentang_saya');

		$this->load->library('upload');
		$nmfile1 = "file_".time();
		$config['upload_path']		= 'assets/cakar/img';
		$config['allowed_types']	= 'gif|jpg|png|jpeg';
		$config['max_size']			= 5120;
		$config['max_width']		= 4300;
		$config['max_height']		= 4300;
		$config['file_name'] 		= $nmfile1;
		
		
			$this->upload->initialize($config);
           
            if($_FILES['foto_3x4']['name'])
        	{
			$this->upload->do_upload('foto_3x4');
			$gbr1 = $this->upload->data();
				
				$data = array(
					'tempat_lahir'		=> $tempat_lahir,
					'tanggal_lahir'		=> $tanggal_lahir,
					'jenis_kelamin'		=> $jenis_kelamin,
					'agama'				=> $agama,
					'golongan_darah'	=> $golongan_darah,
					'email'				=> $email,
					'status'			=> $status,
					'keahlian'			=> $keahlian,
					'tentang_saya'		=> $tentang_saya,
					'foto_3x4' 			=> $gbr1['file_name'],
					
				);
		$this->db->where('id_cv',$id)->update('cv',$data);
	
}else{
		$data = array( 
					'tempat_lahir'		=> $tempat_lahir,
					'tanggal_lahir'		=> $tanggal_lahir,
					'jenis_kelamin'		=> $jenis_kelamin,
					'agama'				=> $agama,
					'golongan_darah'	=> $golongan_darah,
					'email'				=> $email,
					'status'			=> $status,
					'keahlian'			=> $keahlian,
					'tentang_saya'		=> $tentang_saya,
				);
			$this->db->where('id_cv',$id)->update('cv',$data);
}

 if($_FILES['foto_ijazah']['name'])
        	{
			$this->upload->do_upload('foto_ijazah');
			$gbr11 = $this->upload->data();
				
				$data = array(
					'tempat_lahir'		=> $tempat_lahir,
					'tanggal_lahir'		=> $tanggal_lahir,
					'jenis_kelamin'		=> $jenis_kelamin,
					'agama'				=> $agama,
					'golongan_darah'	=> $golongan_darah,
					'email'				=> $email,
					'status'			=> $status,
					'keahlian'			=> $keahlian,
					'tentang_saya'		=> $tentang_saya,
					'foto_ijazah' 		=> $gbr11['file_name'],
					
				);
		$this->db->where('id_cv',$id)->update('cv',$data);
	
}else{
		$data1 = array( 
					'tempat_lahir'		=> $tempat_lahir,
					'tanggal_lahir'		=> $tanggal_lahir,
					'jenis_kelamin'		=> $jenis_kelamin,
					'agama'				=> $agama,
					'golongan_darah'	=> $golongan_darah,
					'email'				=> $email,
					'status'			=> $status,
					'keahlian'			=> $keahlian,
					'tentang_saya'		=> $tentang_saya,
				);
			$this->db->where('id_cv',$id)->update('cv',$data1);
}

 if($_FILES['foto_ktp']['name'])
        	{
			$this->upload->do_upload('foto_ktp');
			$gbr111 = $this->upload->data();
				
				$data = array(
					'tempat_lahir'		=> $tempat_lahir,
					'tanggal_lahir'		=> $tanggal_lahir,
					'jenis_kelamin'		=> $jenis_kelamin,
					'agama'				=> $agama,
					'golongan_darah'	=> $golongan_darah,
					'email'				=> $email,
					'status'			=> $status,
					'keahlian'			=> $keahlian,
					'tentang_saya'		=> $tentang_saya,
					'foto_ktp' 			=> $gbr111['file_name'],
					
				);
		$this->db->where('id_cv',$id)->update('cv',$data);
	
}else{
		$data11 = array( 
					'tempat_lahir'		=> $tempat_lahir,
					'tanggal_lahir'		=> $tanggal_lahir,
					'jenis_kelamin'		=> $jenis_kelamin,
					'agama'				=> $agama,
					'golongan_darah'	=> $golongan_darah,
					'email'				=> $email,
					'status'			=> $status,
					'keahlian'			=> $keahlian,
					'tentang_saya'		=> $tentang_saya,
				);
			$this->db->where('id_cv',$id)->update('cv',$data11);
}

	}

}