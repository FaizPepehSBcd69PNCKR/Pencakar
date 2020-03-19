<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d19864.623539539858!2d-0.1407216728393208!3d51.51178603603532!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604cb878e81b3%3A0x91f10fa364452046!2sCovent+Garden%2C+Londra+WC2E+8BG%2C+Regno+Unito!5e0!3m2!1sit!2ses!4v1538380105649" width="600" height="450" allowfullscreen id="map_iframe"></iframe>
		<!-- /map -->
		<main>
			

		 <?= form_open_multipart('cv_karyawan/tambah'); ?>
		<div class="box_general padding_bottom">
			<div class="header_box version_2">
				<h2 style="color: blue;"><i class="fa fa-file"></i>CV Karyawan</h2>
			</div>
			<br>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label>Nama lengkap</label>
						<input type="text" class="form-control" placeholder="Nama lengkap">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label>Tanggal Lahir</label>
						<input type="date" name="tanggal_lahir" class="form-control" placeholder="">
					</div>
				</div>
			</div>
			<!-- /row-->
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label>Tempat lahir</label>
						<input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat lahir">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label>Jenis kelamin</label>
						<div>
						<select class="custom-select" name="jenis_kelamin">
							<option>Laki-laki</option>
							<option>Perempuan</option>
						</select>
						</div>
					</div>
				</div>
			</div>
			<!-- /row-->
			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<label>Tentang saya</label>
						<textarea style="height:100px;" name="tentang_saya" class="form-control" placeholder="tentang saya"></textarea>
					</div>
				</div>
			</div>
			<!-- /row-->
			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
						<label>Agama</label>
						<input type="text" name="agama" class="form-control" placeholder="Agama">
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label>Nomor telepon</label>
						<input type="text" name="nomor_telepon" class="form-control" placeholder="Nomor telepon">
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label>Status</label>
						<input type="text" name="status" class="form-control" placeholder="Status">
					</div>
				</div>
			</div>
			<!-- /row-->
			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
						<label>Golongan darah</label>
						<input type="text" name="golongan_darah" class="form-control" placeholder="Golongan darah">
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label>Email</label>
						<input type="Email" name="email" class="form-control" placeholder="Email">
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label>Keahlian</label>
						<input type="text" name="keahlian" class="form-control" placeholder="Keahlian">
					</div>
				</div>
			</div>
			<br>
			<!-- /row-->
			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
						<label>Foto 3x4</label>
						<input type="file" name="foto_3x4" class="form-control" id="userfile" onchange="tampilkanPreview(this,'preview_3x4')">
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label>Foto Ijazah</label>
						<input type="file" name="foto_ijazah" class="form-control"  id="userfile" onchange="tampilkanPreview(this,'preview_ijazah')">
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label>Foto KTP</label>
						<input type="file" name="foto_ktp" class="form-control"  id="userfile" onchange="tampilkanPreview(this,'preview_ktp')">
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-4 ">
                           	<label for="" class="control-label"></label>
                            <img id="preview_3x4" width="px" height="150" />
                    </div>
                    <div class="col-md-4 ">
                           	<label for="" class="control-label"></label>
                            <img id="preview_ijazah" width="px" height="150" />
                    </div>
                     <div class="col-md-4 ">
                           	<label for="" class="control-label"></label>
                            <img id="preview_ktp" width="px" height="150" />
                    </div>
			</div>
			<br>
			<br>
			<!-- /row-->
		</div>
		<div class="box_general padding_bottom">
<div class="header_box version_2">
	<h2 style="color: blue;"><i class="fa fa-map-marker"></i>Alamat</h2>
</div>
<br>
<div class="row">
	<div class="col-md-4">
		<div class="form-group">
			<label>Nama jalan</label>
			<input type="text" name="nama_jalan" class="form-control" placeholder="nama jalan">
		</div>
	</div>
	<div class="col-md-4">
		<div class="form-group">
			<label>RT/RW</label>
			<input type="text" name="rt_rw" class="form-control" placeholder="rt / rw">
		</div>
	</div>
	<div class="col-md-4">
		<div class="form-group">
			<label>Desa/Kelurahaan</label>
			<input type="text" name="desa_kelurahan" class="form-control" placeholder="desa / Kelurahaan">					
		</div>
	</div>
</div>
<!-- /row-->
<div class="row">
	<div class="col-md-4">
		<div class="form-group">
			<label>Kecamatan</label>
			<input type="text" name="kecamatan" class="form-control" placeholder="kecamatan">
		</div>
	</div>
	<div class="col-md-4">
		<div class="form-group">
			<label>Kota/Kabupaten</label>
			<input type="text" name="kota_kabupaten" class="form-control" placeholder="kota / Kabupaten">
		</div>
	</div>
	<div class="col-md-4">
		<div class="form-group">
			<label>Provinsi</label>
			<input type="text" name="provinsi" class="form-control" placeholder="provinsi">
		</div>
	</div>
</div>
<br>
		</div>
		<div class="box_general padding_bottom">
			<div class="header_box version_2">
				<h2 style="color: blue;"><i class="fa fa-map-marker"></i>Riwayat Pendidikan</h2>
			</div>
			<br>
			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
						<label>SD/MI</label>
						<input type="text" name="jenjang1" class="form-control" placeholder="sekolah dasar">
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label>SLTP</label>
						<input type="text" name="jenjang2" class="form-control" placeholder="sekolah menengah pertama">
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label>SLTA</label>
						<input type="text" name="jenjang3" class="form-control" placeholder="sekolah menengah atas / kejuruan">
					</div>
				</div>
			</div>
			<!-- /row-->
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label>Universitas</label>
						<input type="text" name="jenjang4" 	class="form-control" placeholder="perguruan tinggi">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label>Gelar</label>
						<input type="text" name="gelar" class="form-control" placeholder="gelar">
					</div>
				</div>
			</div>
			<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Non formal</label>
								<input style="height:100px;" class="form-control" name="jenjang5" placeholder="pondok pesantren">
							</div>
						</div>
					</div>
			<!-- /row-->
<br>
<!-- /row-->
</div>
<div class="box_general padding_bottom">
<div class="header_box version_2">
	<h2 style="color: blue;"><i class="fa fa-map-marker"></i>Pengalaman Kerja</h2>
</div>
<br>
<div class="row">
	<div class="col-md-4">
		<div class="form-group">
			<label>Pernah bekerja di</label>
			<input type="text" name="nama_perusahaan" class="form-control" placeholder="nama sperusahaan">
		</div>
	</div>
	<div class="col-md-4">
		<div class="form-group">
			<label>Lama bekerja</label>
			<input type="text" name="lama_kerja" class="form-control" placeholder="lama anda bekerja">
		</div>
	</div>
	<div class="col-md-4">
		<div class="form-group">
			<label>Posisi sebagai</label>
			<input type="text" name="posisi" class="form-control" placeholder="jabatan di perusahaan">
		</div>
	</div>
</div>
<!-- /row-->
<br>
<button class="btn btn-info"> Simpan</button>
		</div>
	 <?= form_close(); ?>
		<!-- /container -->
	</main>
	<script type="text/javascript">


function tampilkanPreview(userfile,idpreview)
{
  var gb = userfile.files;
  for (var i = 0; i < gb.length; i++)
  {
    var gbPreview = gb[i];
    var imageType = /image.*/;
    var preview=document.getElementById(idpreview);
    var reader = new FileReader();
    if (gbPreview.type.match(imageType))
    {
      //jika tipe data sesuai
      preview.file = gbPreview;
      reader.onload = (function(element)
      {
        return function(e)
        {
          element.src = e.target.result;
        };
      })(preview);
      //membaca data URL gambar
      reader.readAsDataURL(gbPreview);
    }
      else
      {
        //jika tipe data tidak sesuai
        alert("Tipe file tidak sesuai. Gambar harus bertipe .png, .gif atau .jpg.");
      }
  }
}
</script>