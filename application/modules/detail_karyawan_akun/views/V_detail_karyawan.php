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
            <input type="text" disabled="disabled" class="form-control" placeholder="082332271835">
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
         <div class="col-md-6">
          <div class="form-group">
            <label>SD/MI</label>
            <input type="text" disabled="disabled" class="form-control" placeholder="SDN SEMPUH 4 BANYUWANGI">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>SLTP</label>
            <input type="text" disabled="disabled" class="form-control" placeholder="SMPN 4 SEMPUH">
          </div>
        </div>
      </div>
      <!-- /row-->
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>SLTA</label>
            <input type="text" disabled="disabled" class="form-control" placeholder="SMK AL - AZHAR">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Universitas</label>
            <input type="text"disabled="disabled"  class="form-control" placeholder="Universitas Brawijaya">
          </div>
        </div>
        <h5> &nbsp;&nbsp;&nbsp;Non formal</h5>
        <textarea style="height:100px;" disabled="disabled" class="form-control" placeholder="Pondok Pesantren Al-Azhar Sempuh Banyuwangi"></textarea>
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
            <input type="text" disabled="disabled" class="form-control" placeholder="Eratex Djaja">
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label>Pernah bekerja di</label>
            <input type="text" disabled="disabled" class="form-control" placeholder="Gudang Garam">
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
    <!-- /.container-fluid-->
    </div>
     <?php } ?>
   