<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_edit_cv extends CI_Model {

	function tampil()
	{
		//join table
		$this->db->select('*');
		$this->db->from('cv');
		$this->db->join('rl_karyawan','cv.id_rl_karyawan=rl_karyawan.id_rl_karyawan');
		$this->db->join('alamat','cv.id_cv=alamat.id_cv');
		$this->db->join('pendidikan','cv.id_cv=pendidikan.id_cv');
		$this->db->join('pengalaman_kerja','cv.id_cv=pengalaman_kerja.id_cv');
		$query = $this->db->get();
		return $query->result();
	}

	function edit()
	{
		//id cv, id karyawan, id alamat, id pengalaman kerja
		$id      	 		= $this->input->post('id_cv');
		$id2      	 		= $this->input->post('id_rl_karyawan');
		$id3      	 		= $this->input->post('id_alamat');
		$id4      	 		= $this->input->post('id_pengalaman_kerja');

		//nama
		$nama 				= $this->input->post('nama_lengkap');
		$nomor				= $this->input->post('nomor_telepon');
		//biodata
		$tempat_lahir 		= $this->input->post('tempat_lahir');
		$tanggal_lahir		= $this->input->post('tanggal_lahir');
		$jenis_kelamin		= $this->input->post('jenis_kelamin');
		$agama				= $this->input->post('agama');
		$golongan_darah		= $this->input->post('golongan_darah');
		$email				= $this->input->post('email');
		$status				= $this->input->post('status');
		$keahlian			= $this->input->post('keahlian');
		$tentang_saya		= $this->input->post('tentang_saya');
		//alamat
		$nama_jalan 		= $this->input->post('nama_jalan');
		$rt_rw				= $this->input->post('rt_rw');
		$desa_kelurahan 	= $this->input->post('desa_kelurahan');
		$kecamatan			= $this->input->post('kecamatan');
		$kota_kabupaten		= $this->input->post('kota_kabupaten');
		$provinsi			= $this->input->post('provinsi');
		//pengalaman kerja
		$nama_perusahaan	= $this->input->post('nama_perusahaan');
		$lama_kerja			= $this->input->post('lama_kerja');
		$posisi				= $this->input->post('posisi');

		//edit foto
		$this->load->library('upload');
		$nmfile1 = "file_".time();
		$config['upload_path']		= 'assets/cakar/foto34';
		$config['allowed_types']	= 'gif|jpg|png|jpeg';
		$config['max_size']			= 5120;
		$config['max_width']		= 4300;
		$config['max_height']		= 4300;
		$config['file_name'] 		= $nmfile1;
		
		
			$this->upload->initialize($config);

           	//edit foto 3x4
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

//edit foto ijazah
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


//edit foto ktp
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

		//edit username (tb)
		$datarl = array(
					'nama_lengkap' 			=> $nama, 
					'nomor_telepon' 		=> $nomor, 
				);
		$this->db->where('id_rl_karyawan',$id2)->update('rl_karyawan',$datarl);

		//edit alamat lengkap
		$dataalamat = array(
					'nama_jalan' 			=> $nama_jalan, 
					'rt_rw' 				=> $rt_rw,
					'desa_kelurahan' 		=> $desa_kelurahan, 
					'kecamatan' 			=> $kecamatan,
					'kota_kabupaten' 		=> $kota_kabupaten, 
					'provinsi' 				=> $provinsi, 
				);
		$this->db->where('id_alamat',$id3)->update('alamat',$dataalamat);

		//edit pengalaman kerja
		$data_pengalaman = array(
					'nama_perusahaan' 		=> $nama_perusahaan, 
					'lama_kerja' 			=> $lama_kerja,
					'posisi' 				=> $posisi, 
				);
		$this->db->where('id_pengalaman_kerja',$id4)->update('pengalaman_kerja',$data_pengalaman);

	}

}