<style>
    div#lol 
    {
  		width: 110px;
  		height: 200px;
  		overflow: scroll;
	}
</style>
<main>
	<div class="container margin_60">
        <?php foreach ($tampil as $key) {
             ?>
		<div class="row justify-content-center">
			
			<div class="col-xl-3 col-lg-3 col-md-8">
				<div class="box_account">
					<h3 class="" style="margin-left: -100%; color: blue;">FOTO</h3>
                    <h6 style="margin-left: -83%; margin-top: -2%;"><b>Foto 3x4</b></h6>
                    <h6 style="margin-left: -10%; margin-top: -10%;"><b>Foto Ijazah</b></h6>
                    <h6 style="margin-left: 61%; margin-top: -10%;"><b>Foto KTP</b></h6>
					<div class="form_container" style="width: 150px; height: 180px; margin-left: -90%; margin-top: 2%;">
                        <div class="col-md-8 " style="margin-top: -11%">
                            <img   src="<?= base_url(); ?>assets/cakar/foto34/<?= $key->foto_3x4 ?>" width="120px" height="150px" style="margin-left: -65%;" style="position: absolute;">
                        </div><br>
					</div>
                    <div class="form_container" style="width: 150px; height: 180px; margin-left: -17%; margin-top: -70%;">
                        <div class="col-md-8 " style="margin-top: -11%">
                            <img   src="<?= base_url(); ?>assets/cakar/foto34/<?= $key->foto_ijazah ?>" width="120px" height="150px" style="margin-left: -65%;" style="position: absolute;">
                        </div><br>
                    </div>
                    <div class="form_container" style="width: 280px; height: 180px; margin-left: 55%; margin-top: -70%;">
                         <div class="col-md-8 " style="margin-top: -5%">
                            <img   src="<?= base_url(); ?>assets/cakar/foto34/<?= $key->foto_ktp ?>" width="250px" height="150px" style="margin-left: -20%;" style="position: absolute;">
                        </div><br>
                    </div><hr>
                    <!-- end foto -->
                    <h3 style="margin-left: -100%; color: blue;">RIWAYAT PENDIDIKAN</h3>
                <div class="form_container" style="width: 650px; margin-left: -90%;">
                        <div class="col-lg-4">
                            <label for="" class="form-control1" style="margin-left: -10%;"><b>Formal</b></label>
                        </div><br>
                	<div class="row">
                    	<div class="col-md-2">
                        	<label class="fix_spacing" style="margin-left: 10%;">SD/MI </label>
                    	</div>
                		<div class="col-md-10" style="margin-left: -1%;">
                         	<div class="">     
                            	<input type="text" disabled="disabled" name="nama_sekolah" class="form-control">
                        	</div>  
                		</div>
                	</div><br>
                 	<div class="row">
                    	<div class="col-md-2">
                        	<label class="fix_spacing" style="margin-left: 10%;">SLTP</label>
                    	</div>
                		<div class="col-md-10" style="margin-left: -1%;">
                        	<div class="">     
                            	<input type="text" disabled="disabled" placeh class="form-control">
                        	</div>
                		</div>
                	</div><br>
                 	<div class="row">
                    	<div class="col-md-2">
                        	<label class="fix_spacing" style="margin-left: 10%;">SLTA</label>
                    	</div>
                		<div class="col-md-10" style="margin-left: -1%;">
                         	<div class="">     
                            	<input type="text" disabled="disabled" name="nama_sekolah" class="form-control">
                        	</div>  
                		</div>
                	</div><br>
                	<div class="row">
                    	<div class="col-md-2">
                        	<label class="fix_spacing" style="margin-left: 10%;">Universitas</label>
                    	</div>
                		<div class="col-md-10" style="margin-left: -1%;">
                         	<div class="">     
                            	<input type="text" disabled="disabled" name="nama_sekolah" placeh class="form-control">
                        	</div>  
                		</div>
                	</div><br>
                		<div class="col-lg-4">
                    		<label for="" class="form-control1" style="margin-left: -10%;"><b>Non Formal</b></label>
                		</div><br>
                		<div class="">     
                    		<input type="text" disabled="disabled" name="nama_sekolah" placeh class="form-control">
                    	</div>    
                </div><hr>
                	<!-- end pendidikan -->
           		<h3 style="margin-left: -100%; color: blue;">PENGALAMAN KERJA</h3>
                <div class="form_container" id="lol" style="margin-left: -90%; margin-top: -3%; width: 255%;">
                    <div class="col-lg-4">
                        <label for="" class="form-control1">Pernah bekerja di :</label>
                    </div>
                    <div class="">     
                        <input type="text" disabled="disabled" class="form-control" value="<?php echo $key->nama_perusahaan ?>">
                    </div><hr>


                </div><br>
                <!-- end pengalaman kerja -->
                <div class="form_container" style="width:160%; margin-left: -90%;">
                    <ul>
                        <li>          
                        	<figure><img src="<?php echo base_url().'assets/akun/img/logobri.png' ?>" class="rounded-circle" alt="not photos" width="60" height="60"></figure>
                        	<h4 style="margin-left: 22%; margin-top: -17%;">Go-jek</h4><br>
                        	<li><h8 style="margin-left: -1%;">Dikeluarkan :&nbsp;&nbsp; 21/12/2018</h8></li>
                        </li><br>
                        <li><p>Dasar karyawan lucknut disuruh kerja malah ngudud </p></li>
                    </ul> 
                </div>
			</div>
		</div>
			<div class="col-xl-6 col-lg-6 col-md-8">
				<div class="box_account">
					<h3 class="" style="margin-left: 25%; color: blue;">BIODATA</h3>
					<div class="form_container" style="margin-left: 30%; width: 110%;">
						<div class="col-lg-4">
                            <label for="" class="form-control1">Nama lengkap :</label>
                        </div>
                        <div class="">     
                            <input type="text" disabled="disabled" class="form-control" value="<?php echo $key->nama_lengkap ?>">
                        </div><hr>
						<div class="col-lg-4">
                            <label for="" class="form-control1">Tempat lahir :</label>
                        </div>
                        <div class="">     
                            <input type="text" disabled="disabled"  class="form-control" value="<?php echo $key->tempat_lahir ?>">
                        </div><hr>
						<div class="col-lg-4">
                            <label for="" class="form-control1">Tanggal lahir :</label>
                        </div>
                        <div class="">     
                            <input type="text" disabled="disabled" class="form-control" value="<?php echo $key->tanggal_lahir ?>">
                        </div><hr>
                        <div class="col-lg-4">
                            <label for="" class="form-control1">Golongan darah :</label>
                        </div>
                        <div class="">     
                            <input type="text" disabled="disabled" class="form-control" value="<?php echo $key->golongan_darah ?>">
                        </div><hr>
						<div class="col-lg-4">
                            <label for="" class="form-control1">Jenis kelamin :</label>
                        </div>
                        <div class="">     
                            <input type="text" disabled="disabled" class="form-control" value="<?php echo $key->jenis_kelamin ?>">
                        </div><hr>
						<div class="col-lg-4">
                            <label for="" class="form-control1">Agama :</label>
                        </div>
                        <div class="">     
                            <input type="text" disabled="disabled" class="form-control" value="<?php echo $key->agama ?>">
                        </div><hr>
						<div class="col-lg-4">
                            <label for="" class="form-control1">Alamat lengkap :</label>
                        </div>
                        <div class="">     
                            <input type="text" disabled="disabled" class="form-control" value="<?php echo $key->nama_jalan ?>, <?php echo $key->rt_rw ?>, <?php echo $key->desa_kelurahan ?>, <?php echo $key->kecamatan ?>, <?php echo $key->kota_kabupaten ?>, <?php echo $key->provinsi ?>">
                        </div><hr>
						<div class="col-lg-4">
                            <label for="" class="form-control1">Nomer telepon :</label>
                        </div>
                        <div class="">     
                            <input type="text" disabled="disabled" class="form-control" value="<?php echo $key->nomor_telepon ?>">
                        </div><hr>
                        <div class="col-lg-4">
                            <label for="" class="form-control1">Status :</label>
                        </div>
                        <div class="">     
                            <input type="text" disabled="disabled" name="nama_sekolah" class="form-control" value="<?php echo $key->status ?>">
                        </div><hr>
                        <div class="col-lg-4">
                            <label for="" class="form-control1">Email :</label>
                        </div>
                        <div class="">     
                            <input type="text" disabled="disabled" name="nama_sekolah" class="form-control" value="<?php echo $key->email ?>">
                        </div><hr>
                         <div class="col-lg-4">
                            <label for="" class="form-control1">Keahlian :</label>
                        </div>
                        <div class="">     
                            <input type="text" disabled="disabled" name="nama_sekolah" class="form-control" value="<?php echo $key->keahlian ?>">
                        </div><hr>
                         <div class="col-lg-4">
                            <label for="" class="form-control1">Tentang saya :</label>
                        </div>
                        <div class="">     
                            <input type="text" disabled="disabled" name="nama_sekolah" class="form-control" value="<?php echo $key->tentang_saya ?>">
                        </div><hr><br>
						<div class="text-center"><a href="#modal-risky" id="modal-riskyT"><input type="submit" value="Rekrut" class="btn_1 full-width"></a></div>
					</div>
					<!-- end biodata -->
				</div>
			</div>
		
		</div>
        <?php } ?>
	</div>
</main>