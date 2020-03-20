<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_cv_karyawan extends CI_Model {

	function tampil()
	{
		return $this->db->get('cv')->result();
	}
	//inpur
	function tambahh()
		{
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
		$config['upload_path']		= 'assets/cakar/foto34';
		$config['allowed_types']	= 'gif|jpg|png|jpeg';
		$config['max_size']			= 5120;
		$config['max_width']		= 4300;
		$config['max_height']		= 4300;
		$config['file_name'] 		= $nmfile1;
		
		
			$this->upload->initialize($config);
			$this->upload->do_upload('foto_3x4');
			$gbr1 = $this->upload->data();
			$this->upload->do_upload('foto_ijazah');
			$gbr2 = $this->upload->data();
			$this->upload->do_upload('foto_ktp');
			$gbr3 = $this->upload->data();
            
				
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
					'foto_ijazah' 		=> $gbr2['file_name'],
					'foto_ktp' 			=> $gbr3['file_name'],
					
				);
				$this->db->insert('cv', $data);

				$nama_jalan 		= $this->input->post('nama_jalan');
				$rt_rw 				= $this->input->post('rt_rw');
				$desa_kelurahan 	= $this->input->post('desa_kelurahan');
				$kecamatan 			= $this->input->post('kecamatan');
				$kota_kabupaten 	= $this->input->post('kota_kabupaten');
				$provinsi 			= $this->input->post('provinsi');
					
					$data = array(
						'nama_jalan' 		=> $nama_jalan,
						'rt_rw' 			=> $rt_rw,
						'desa_kelurahan'	=> $desa_kelurahan,
						'kecamatan' 		=> $kecamatan,
						'kota_kabupaten' 	=> $kota_kabupaten,
						'provinsi' 			=> $provinsi,
								);

					$this->db->insert('alamat', $data);

					$nama_perusahaan 	= $this->input->post('nama_perusahaan');
					$lama_kerja 		= $this->input->post('lama_kerja');
					$posisi 			= $this->input->post('posisi');

					$data = array(
						'nama_perusahaan' 	=> $nama_perusahaan,
						'lama_kerja' 		=> $lama_kerja,
						'posisi' 			=> $posisi,
					);
					$this->db->insert('pengalaman_kerja', $data);

					$jenjang1 			= $this->input->post('jenjang1');
					$jenjang2 			= $this->input->post('jenjang2');
					$jenjang3 			= $this->input->post('jenjang3');
					$jenjang4 			= $this->input->post('jenjang4');
					$gelar 				= $this->input->post('gelar');
					$jenjang5			= $this->input->post('jenjang5');

					$data1 = array(
						'jenjang' 			=> $jenjang1,
							);

					$this->db->insert('pendidikan', $data1);

					$data2 = array(
						'jenjang' 			=> $jenjang2,
							);

					$this->db->insert('pendidikan', $data2);

					$data3 = array(
						'jenjang' 			=> $jenjang3,
							);

					$this->db->insert('pendidikan', $data3);

					$data4 = array(
						'jenjang' 			=> $jenjang4,
						'gelar'				=>$gelar,
							);

					$this->db->insert('pendidikan', $data4);

					$data5 = array(
						'jenjang' 			=> $jenjang5,
							);

					$this->db->insert('pendidikan', $data5);






	}
}