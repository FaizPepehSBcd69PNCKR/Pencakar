<?php                                    
            foreach($tampil as $key){
              ?>
 <!-- /Navigation-->
  
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Add listing</li>
      </ol>
    <div class="box_general padding_bottom">
      <div class="header_box version_2">
        <h2><i class="fa fa-file"></i> Biodata</h2>
      </div>
       
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Nama lengkap</label>
            <input type="text" disabled="disabled" class="form-control" value="<?php echo $key->nama_lengkap ?>">
          </div>
        </div>
         <div class="col-md-6">
          <div class="form-group">
            <label>tanggal lahir</label>
            <input type="text" disabled="disabled" class="form-control" value="<?php echo $key->tanggal_lahir ?>">
          </div>
        </div>
      </div>
      <!-- /row-->
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Tempat lahir</label>
            <input type="text" disabled="disabled" value="<?php echo $key->tempat_lahir ?>" class="form-control" placeholder="Banyuwangi">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Jenis kelamin</label>
            <input type="text" disabled="disabled" value="<?php echo$key->jenis_kelamin ?>" class="form-control" >
          </div>
        </div>
      </div>
      <!-- /row-->
      <div class="row">
        <div class="col-md-12">
              <div class="form-group">
                <label>Alamat lengkap</label>
                <input style="height:100px;" disabled="disabled" class="form-control" value="<?php echo $key->nama_jalan ?>,<?php echo $key->rt_rw ?>,<?php echo $key->desa_kelurahan ?>,<?php echo $key->kecamatan ?><?php echo $key->kota_kabupaten ?>,<?php echo $key->provinsi ?>">
              </div>
            </div>
      </div>
      <!-- /row-->
      <div class="row">
        <div class="col-md-4">
          <div class="form-group">
            <label>Agama</label>
            <input type="text" disabled="disabled" class="form-control"  value="<?php echo $key->agama ?>">
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label>Nomor telepon</label>
            <input type="text" disabled="disabled" class="form-control" value="<?php echo $key->nomor_telepon ?>">
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label>Status</label>
            <input type="text" disabled="disabled" class="form-control" value="<?php echo $key->status ?>">
          </div>
        </div>
      </div>
      <!-- /row-->
      <div class="row">
        <div class="col-md-4">
          <div class="form-group">
            <label>Golongan darah</label>
            <input type="text" disabled="disabled" class="form-control" value="<?php echo $key->golongan_darah ?>">
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label>Email</label>
            <input type="text" disabled="disabled" class="form-control" value="<?php echo $key->email ?>">
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label>Keahlian</label>
            <input type="text" disabled="disabled" class="form-control" value="<?php echo $key->keahlian ?>">
          </div>
        </div>
      </div>
      <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Tentang saya</label>
                <input style="height:100px;" disabled="disabled"  value="<?php echo $key->tentang_saya ?>" class="form-control">
              </div>
            </div>
          </div>
      <!-- /row-->
      <div class="row">
        <div class="col-md-4">
          <div class="form-group">
            <label>Foto 3x4</label><br>
            <img  src="<?= base_url(); ?>assets/cakar/foto34/<?= $key->foto_3x4 ?>" width="120px" height="150px" >
          </div>
        </div>
         <div class="col-md-4">
          <div class="form-group">
            <label>Foto ijazah</label><br>
            <img  src="<?= base_url(); ?>assets/cakar/foto34/<?= $key->foto_ijazah ?>" width="120px" height="150px">
          </div>
        </div>
         <div class="col-md-4">
          <div class="form-group">
            <label>Foto KTP</label><br>
            <img  src="<?= base_url(); ?>assets/cakar/foto34/<?= $key->foto_ktp ?>" width="250px" height="150px">
          </div>
        </div>
      </div>
      <!-- /row-->
    </div>
    <!-- /box_general-->
    
    <div class="box_general padding_bottom">
      <div class="header_box version_2">
        <h2>Riwayat pendidikan</h2>
      </div>
      <h5>Formal</h5>
     <div class="row">
        <div class="col-md-4">
          <div class="form-group">
            <label>SD/MI</label>
            <input type="text" name="" disabled="disabled" class="form-control" >
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label>SLTP</label>
            <input type="text" name="" disabled="disabled" class="form-control">
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label>SLTA</label>
            <input type="text" name="" disabled="disabled" class="form-control">
          </div>
        </div>
      </div>
      <!-- /row-->
     <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Universitas</label>
            <input type="text" name=""  disabled="disabled" class="form-control">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Gelar</label>
            <input type="text" name="" disabled="disabled" class="form-control">
          </div>
        </div>
      </div>
      <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Non formal</label>
                <input style="height:100px;" disabled="disabled" class="form-control">
              </div>
            </div>
          </div>
      <!-- /row-->
    </div>
    <div class="box_general padding_bottom">
      <div class="header_box version_2">
        <h2>Pengalaman kerja</h2>
      </div>
      <div class="row">
         <div class="col-md-4">
          <div class="form-group">
            <label>Pernah bekerja di</label>
            <input type="text" disabled="disabled" class="form-control" value="<?php echo $key->nama_perusahaan?>">
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label>Lama Bekerja</label>
            <input type="text" disabled="disabled" class="form-control" value="<?php echo $key->lama_kerja?>">
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label>Jabatan</label>
            <input type="text" disabled="disabled" class="form-control" value="<?php echo $key->posisi?>">
          </div>
        </div>
        
      </div>
      <!-- /row-->
      <!-- /row-->
    </div>
    <!-- /box_general-->
    </div>
    <p style="text-align: center;"><a href="" class="btn_1 medium" class="nav-link" data-toggle="modal" data-target="#edit_biodata">Edit</a></p>
    <!-- /.container-fluid-->
    </div>
    
    <form method="post" action="<?php echo base_url('edit_cv/edit'); ?>" enctype="multipart/form-data">
    <input type="hidden" name="id_cv" value="<?php echo $key->id_cv ?>">
    <input type="hidden" name="id_rl_karyawan" value="<?php echo $key->id_rl_karyawan ?>">
    <input type="hidden" name="id_alamat" value="<?php echo $key->id_alamat ?>">
    <input type="hidden" name="id_pengalaman_kerja" value="<?php echo $key->id_pengalaman_kerja ?>">
     <div class="modal fade" id="edit_biodata" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog  modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Biodata</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="box_general padding_bottom">
                  <form class="form-horizontal">              
                          <div class="panel-body">
 <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <label>Nama lengkap</label>
        <input type="text" name="nama_lengkap" class="form-control" value="<?php echo $key->nama_lengkap ?>">
      </div>
    </div>
     <div class="col-md-6">
      <div class="form-group">
        <label>Tanggal lahir</label>
        <input type="text" name="tanggal_lahir" value="<?php echo $key->tanggal_lahir?>" class="form-control">
  

      </div>
    </div>
  </div>
  <!-- /row-->
  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <label>Tempat lahir</label>
        <input type="text" name="tempat_lahir" value="<?php echo $key->tempat_lahir ?>" class="form-control">
      </div>
    </div>
   <!--  <div class="col-md-6">
      <div class="form-group">
        <label>Jenis kelamin</label>
        <div class="row">
          <div class="col-md-4">
          <input type="radio" name="gender" value="laki-laki">
          <label for="laki-laki">laki laki</label>
        </div>
          <div class="col-md-4">
          <input type="radio" name="gender" value="laki-laki">
          <label for="laki-laki">laki laki</label>
        </div>
        </div>
      </div>
    </div> -->
     <div class="col-md-6">
      <div class="form-group">
        <label>Jenis kelamin</label>
        <input type="text" name="jenis_kelamin" value="<?php echo $key->jenis_kelamin ?>" class="form-control">
      </div>
    </div>
  </div>

  <!-- /row-->
  <div class="row">
    <div class="col-md-4">
      <div class="form-group">
        <label>Agama</label>
        <input type="text" name="agama" value="<?php echo $key->agama ?>" class="form-control">
  
      </div>
    </div>
    <div class="col-md-4">
      <div class="form-group">
        <label>Nomor telepon</label>
        <input type="text" name="nomor_telepon" value="<?php echo $key->nomor_telepon ?>" class="form-control">
      </div>
    </div>
    <div class="col-md-4">
      <div class="form-group">
        <label>Status</label>
        <input type="text" name="status" value="<?php echo $key->status ?>" class="form-control">
  
      </div>
    </div>
  </div>
  <!-- /row-->
  <div class="row">
    <div class="col-md-4">
      <div class="form-group">
        <label>Golongan darah</label>
        <input type="text" name="golongan_darah" value="<?php echo $key->golongan_darah ?>" class="form-control">
  
      </div>
    </div>
    <div class="col-md-4">
      <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" value="<?php echo $key->email ?>" class="form-control">
  
      </div>
    </div>
    <div class="col-md-4">
      <div class="form-group">
        <label>Keahlian</label>
        <input type="text" name="keahlian" value="<?php echo $key->keahlian ?>" class="form-control">
  
      </div>
    </div>
  </div>
    <div class="row">
        <div class="col-md-12">
              <div class="form-group">
                <label>Tentang Saya</label>
                <input style="height:100px;" name="tentang_saya" value="<?php echo $key->tentang_saya ?>" class="form-control">
          
              </div>
            </div>
      </div>
    </div>
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
            <img src="<?= base_url(); ?>assets/cakar/foto34/<?= $key->foto_3x4 ?>" width="100" height="120" id="preview_3x4" />
        </div>
        <div class="col-md-4 ">
            <label for="" class="control-label"></label>
            <img  src="<?= base_url(); ?>assets/cakar/foto34/<?= $key->foto_ijazah ?>" width="80" height="120" id="preview_ijazah"/>
        </div>
        <div class="col-md-4 ">
            <label for="" class="control-label"></label>
            <img src="<?= base_url(); ?>assets/cakar/foto34/<?= $key->foto_ktp ?>" width="200" height="120" id="preview_ktp"/>
        </div>
      </div>
    </form>
</div>

<!-- /box_general-->
<div class="box_general padding_bottom">
  <div class="header_box version_2">
    <h2>Alamat</h2>
  </div>
  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <label>Nama Jalan</label>
        <input type="text" name="nama_jalan" value="<?php echo $key->nama_jalan ?>" class="form-control">
      </div>
    </div>
     <div class="col-md-6">
      <div class="form-group">
        <label>RT / RW</label>
        <input type="text" name="rt_rw" value="<?php echo $key->rt_rw ?>" class="form-control">
      </div>
    </div>
  </div>
  <!-- /row-->
  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <label>Desa / Kelurahan</label>
        <input type="text" name="desa_kelurahan" value="<?php echo $key->desa_kelurahan ?>" class="form-control">
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <label>Kecamatan</label>
        <input type="text" name="kecamatan" value="<?php echo $key->kecamatan ?>" class="form-control">
      </div>
    </div>
  </div>
   <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <label>Kota / Kabupaten</label>
        <input type="text" name="kota_kabupaten" value="<?php echo $key->kota_kabupaten ?>" class="form-control">
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <label>Provinsi</label>
        <input type="text" name="provinsi" value="<?php echo $key->provinsi ?>" class="form-control">
      </div>
    </div>
  </div>
</div>

<div class="box_general padding_bottom">
  <div class="header_box version_2">
    <h2>Riwayat pendidikan</h2>
  </div>
  <h5>Formal</h5>
  <div class="row">
     <div class="col-md-6">
      <div class="form-group">
        <label>SD/MI</label>
        <input type="text" value="" class="form-control">
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <label>SLTP</label>
        <input type="text" value="" class="form-control">
      </div>
    </div>
  </div>
  
  <!-- /row-->
  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <label>SLTA</label>
        <input type="text" value="" class="form-control">
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <label>Universitas</label>
        <input type="text" value=""  class="form-control">
      </div>
    </div>
    <h5> &nbsp;&nbsp;&nbsp;Non formal</h5>
    <textarea style="height:100px;" value="" class="form-control"></textarea>
  </div>
  <!-- /row-->
</div>
<div class="box_general padding_bottom">
  <div class="header_box version_2">
    <h2>Pengalaman kerja</h2>
  </div>
  <div class="row">
     <div class="col-md-4">
      <div class="form-group">
        <label>Pernah bekerja di</label>
        <input type="text" name="nama_perusahaan" value="<?php echo $key->nama_perusahaan ?>" class="form-control">
      </div>
    </div>
    <div class="col-md-4">
      <div class="form-group">
        <label>Lama bekerja</label>
        <input type="text" name="lama_kerja" value="<?php echo $key->lama_kerja ?>" class="form-control">
      </div>
    </div>
    <div class="col-md-4">
      <div class="form-group">
        <label>Jabatan</label>
        <input type="text" name="posisi" value="<?php echo $key->posisi ?>" class="form-control">
      </div>
    </div>
  </div>
  <!-- /row-->
  <!-- /row-->
</div>

          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
            <button class="btn btn-primary" type="submit">Simpan</button>
          </div>
        </div>
      </div>
    </div>
    </form>
    <?php } ?>

    <script>
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
