<?php                                    
            foreach($tampil as $key){
              $id = $key->id_cv;
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
            <input type="text" disabled="disabled" class="form-control">
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
                <textarea style="height:100px;" disabled="disabled" class="form-control" ></textarea>
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
            <input type="text" disabled="disabled" class="form-control">
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
            <img  src="<?= base_url(); ?>assets/cakar/img/<?= $key->foto_3x4 ?>" width="120px" height="150px" >
          </div>
        </div>
         <div class="col-md-4">
          <div class="form-group">
            <label>Foto ijazah</label><br>
            <img  src="<?= base_url(); ?>assets/cakar/img/<?= $key->foto_ijazah ?>" width="120px" height="150px">
          </div>
        </div>
         <div class="col-md-4">
          <div class="form-group">
            <label>Foto KTP</label><br>
            <img  src="<?= base_url(); ?>assets/cakar/img/<?= $key->foto_ktp ?>" width="250px" height="150px">
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
            <input type="text" disabled="disabled" class="form-control">
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label>Pernah bekerja di</label>
            <input type="text" disabled="disabled" class="form-control">
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label>Pernah bekerja di</label>
            <input type="text" disabled="disabled" class="form-control">
          </div>
        </div>
        
      </div>
      <!-- /row-->
      <!-- /row-->
    </div>
    <!-- /box_general-->
    </div>
    <p style="text-align: center;"><a href="add-listing-2.html" class="btn_1 medium" class="nav-link" data-toggle="modal" data-target="#edit_biodata">Edit</a></p>
    <!-- /.container-fluid-->
    </div>
    
    <?= form_open_multipart('edit_cv/edit');  ?>
    <input type="hidden" name="id_cv" value="<?php echo $key->id_cv ?>">
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
        <input type="text" value="" class="form-control">
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
        <input type="text" value="" class="form-control">
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
            <img src="<?= base_url(); ?>assets/cakar/img/<?= $key->foto_3x4 ?>" width="100" height="120" />
        </div>
        <div class="col-md-4 ">
            <label for="" class="control-label"></label>
            <img  src="<?= base_url(); ?>assets/cakar/img/<?= $key->foto_ijazah ?>" width="80" height="120" />
        </div>
        <div class="col-md-4 ">
            <label for="" class="control-label"></label>
            <img src="<?= base_url(); ?>assets/cakar/img/<?= $key->foto_ktp ?>" width="200" height="120" />
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
        <label>RT / RW</label>
        <input type="text" value="" class="form-control">
      </div>
    </div>
     <div class="col-md-6">
      <div class="form-group">
        <label>Desa / Kelurahan</label>
        <input type="text" value="" class="form-control">
      </div>
    </div>
  </div>
  <!-- /row-->
  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <label>Kota / Kabupaten</label>
        <input type="text" value="" class="form-control">
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <label>Provinsi</label>
        <input type="text" value="" class="form-control">
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
        <input type="text" value="" class="form-control">
      </div>
    </div>
    <div class="col-md-4">
      <div class="form-group">
        <label>Pernah bekerja di</label>
        <input type="text" value="" class="form-control">
      </div>
    </div>
    <div class="col-md-4">
      <div class="form-group">
        <label>Pernah bekerja di</label>
        <input type="text" value="" class="form-control">
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
    <?= form_close(); ?>
    <?php } ?>