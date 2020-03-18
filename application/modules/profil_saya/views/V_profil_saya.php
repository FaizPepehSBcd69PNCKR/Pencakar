
       <?php
    foreach ($tampil as $aku) {
        $id = $aku->id_rl_karyawan;
?>
        <!-- /Navigation-->
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Ganti Profil </li>
      </ol>
    <div class="box_general padding_bottom">
      <div class="header_box version_2"> 
        <h2><i class="fa fa-user"></i>Profile details</h2>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="form-group"><br>
          <label>Foto</label><br><br>
            <img  src="<?= base_url(); ?>assets/cakar/foto34/<?= $aku->foto_3x4 ?>" width="200" height="200">
            </div>
        </div>
        <div class="col-md-8 add_top_30">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Nama lengkap</label>
                <input type="text" class="form-control" disabled="disabled" value="<?php echo $aku->nama_lengkap ?>">
              </div>
            </div>
          <div class="col-md-6">
              <div class="form-group">
                <label>Nomer Telepon</label>
                <input type="text" disabled="disabled" class="form-control" value="<?php echo $aku->nomor_telepon ?>">
              </div>
            </div>
          </div>
          <!-- /row-->
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Email</label>
                <input type="email" disabled="disabled" class="form-control" value="<?php echo $aku->email ?>">
              </div>
            </div>
          </div>
          <!-- /row-->
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Tentang saya</label>
                <input type="text" disabled="disabled" style="height:100px;" class="form-control" value="<?php echo $aku->tentang_saya ?>">
              </div>
            </div>
          </div>
          <!-- /row-->
        </div>
      </div>
    </div>
    <!-- /row-->
     <p style="text-align: center;"><a href=""class="btn_1 medium" class="nav-link" data-toggle="modal" data-target="#edit_profil">Edit</a></p>
    </div>
    <!-- /.container-fluid-->
    </div>

<div class="modal fade" id="edit_profil" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog  modal-lg" role="document">
        <div class="modal-content">
            <div class="box_general padding_bottom">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Profil</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
            <?= form_open_multipart('profil_saya/edit');  ?>
            <input type="hidden" name="id_rl_karyawan" value="<?php echo $aku->id_rl_karyawan ?>">
            <input type="hidden" name="id_cv" value="<?php echo $aku->id_cv ?>">

           <div class="modal-body">              
                          <div class="panel-body">
 

       <div class="row">
                <div class="col-md-4">
                    <div class="form-group"><br>
                    <label>Foto</label><br><br>
                         <input type="file" name="foto">
                    </div>
                </div>
                <div class="col-md-8 add_top_30">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nama lengkap</label>
                                <input type="text" name="nama_lengkap"  class="form-control" value="<?php echo $aku->nama_lengkap?>">
                            </div>
                        </div>
                    <div class="col-md-6">
              <div class="form-group">
                <label>Nomer Telepon</label>f
                <input type="text" value="<?php echo $aku->nomor_telepon ?>" name="nomor_telepon" class="form-control" >
              </div>
            </div>
                    </div>
                    <!-- /row-->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="email" class="form-control" value="<?php echo $aku->email ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Tentang saya</label>
                <input type="text" name="tentang_saya" class="form-control" value="<?php echo $aku->tentang_saya ?>">
              </div>
            </div>
          </div>
                 
                </div>
              </div>
            </div><br><br>
  </div>
   <div class="row">
      <div class="col-md-6">
        <div class="box_general padding_bottom">
          <div class="header_box version_2">
            <h2><i class="fa fa-lock"></i>Ganti kata sandi</h2>
          </div>
          <div class="form-group">
            <label>kata sandi lama</label>
            <input class="form-control" type="password">
          </div>
          <div class="form-group">
            <label>kata sandi baru</label>
            <input class="form-control" type="password">
          </div>
          <div class="form-group">
            <label>konfirmasi kata sandi baru </label>
            <input class="form-control" type="password">
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="box_general padding_bottom">
          <div class="header_box version_2">
            <h2><i class="fa fa-envelope"></i>Ganti Nomor telepon</h2>
          </div>
          <div class="form-group">
            <label>Nomor telepon lama</label>
            <input class="form-control" name="old_email" id="old_email" type="email">
          </div>
          <div class="form-group">
            <label>Nomor telepon baru</label>
            <input class="form-control" name="new_email" id="new_email" type="email">
          </div>
          <div class="form-group">
            <label>Konfirmasi nomor telepon baru</label>
            <input class="form-control" name="confirm_new_email" id="confirm_new_email" type="email">
          </div>
        </div>
      </div>
    </div>
        <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
            <button class="btn btn-primary">Simpan</button>
          </div>
      <?= form_close();  ?>
    </div>
  </div>
</div>
</div>
   <?php } ?>