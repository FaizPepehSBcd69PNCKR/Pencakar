<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_p_profil_saya extends CI_Model {

	function tampil()
	{
		return $this->db->get('rl_perusahaan')->result();
	}

	

	function edit()
	{
		$id      = $this->input->post('id_rl_perusahaan');

		$nama_perusahaan   		  = $this->input->post('nama_perusahaan');
		$telepon_perusahaan	 	  = $this->input->post('telepon_perusahaan');
		$email_perusahaan 	 	  = $this->input->post('email_perusahaan');
		$alamatlengkap_perusahaan = $this->input->post('alamatlengkap_perusahaan');
        $keterangan_perusahaan    = $this->input->post('keterangan_perusahaan');

		$this->load->library('upload');
		$nmfile1 = "file_".time();
		$config['upload_path']		= 'assets/cakar/foto34';
		$config['allowed_types']	= 'gif|jpg|png|jpeg';
		$config['max_size']			= 5120;
		$config['max_width']		= 4300;
		$config['max_height']		= 4300;
		$config['file_name'] 		= $nmfile1;
		
		
			$this->upload->initialize($config);
           
            if($_FILES['logo_perusahaan']['name'])
        	{
			$this->upload->do_upload('logo_perusahaan');
			$gbr1 = $this->upload->data();
				
				$data = array(
					'nama_perusahaan'		    => $nama_perusahaan,
					'telepon_perusahaan'		=> $telepon_perusahaan,
					'email_perusahaan'		    => $email_perusahaan,
					'alamatlengkap_perusahaan'  => $alamatlengkap_perusahaan,
					'keterangan_perusahaan'     => $keterangan_perusahaan,
					'logo_perusahaan' 			=> $gbr1['file_name'],
					
				);
		$this->db->where('id_rl_perusahaan',$id)->update('rl_perusahaan',$data);
	
		}else{
		$data = array( 
					'nama_perusahaan'			=> $nama_perusahaan,
					'telepon_perusahaan'		=> $telepon_perusahaan,
					'email_perusahaan'		    => $email_perusahaan,
					'alamatlengkap_perusahaan'	=> $alamatlengkap_perusahaan,
					'keterangan_perusahaan'     => $keterangan_perusahaan,
				);
			$this->db->where('id_rl_perusahaan',$id)->update('rl_perusahaan',$data);
		}
	}
}