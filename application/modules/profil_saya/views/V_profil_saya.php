
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
            <img src="img/avatar5.jpg" width="200" height="200">
            </div>
        </div>
        <div class="col-md-8 add_top_30">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Nama lengkap</label>
                <input type="text" class="form-control" disabled="disabled" name="nama">
              </div>
            </div>
          <div class="col-md-6">
              <div class="form-group">
                <label>Nomer Telepon</label>
                <input type="text" disabled="disabled" class="form-control">
              </div>
            </div>
          </div>
          <!-- /row-->
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Email</label>
                <input type="emil" disabled="disabled" class="form-control">
              </div>
            </div>
          </div>
          <!-- /row-->
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Personal info</label>
                <textarea style="height:100px;" class="form-control"></textarea>
              </div>
            </div>
          </div>
          <!-- /row-->
        </div>
      </div>
    </div>
    <!-- /box_general-->
    <!-- <div class="row">
      <div class="col-md-6">
        <div class="box_general padding_bottom">
          <div class="header_box version_2">
            <h2><i class="fa fa-lock"></i>Ganti Password</h2>
          </div>
          <div class="form-group">
            <label>Password Lama</label>
            <input class="form-control" type="password">
          </div>
          <div class="form-group">
            <label>Password Baru</label>
            <input class="form-control" type="password">
          </div>
          <div class="form-group">
            <label>Confirm Password Baru </label>
            <input class="form-control" type="password">
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="box_general padding_bottom">
          <div class="header_box version_2">
            <h2><i class="fa fa-envelope"></i>Ganti Email</h2>
          </div>
          <div class="form-group">
            <label>Email Lama</label>
            <input class="form-control" name="old_email" id="old_email" type="email">
          </div>
          <div class="form-group">
            <label>Email baru</label>
            <input class="form-control" name="new_email" id="new_email" type="email">
          </div>
          <div class="form-group">
            <label>Confirm Email Baru</label>
            <input class="form-control" name="confirm_new_email" id="confirm_new_email" type="email">
          </div>
        </div>
      </div>
    </div> -->
    <!-- /row-->
     <p style="text-align: center;"><a href=""class="btn_1 medium" class="nav-link" data-toggle="modal" data-target="#edit_profil">Edit</a></p>
    </div>
    <!-- /.container-fluid-->
    </div>

<div class="modal fade" id="edit_profil" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog  modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Profil</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
           <form method="post" action="<?php echo base_url().'profil_saya/edit'; ?>">

           <div class="modal-body">
                  <form class="form-horizontal">              
                          <div class="panel-body">
 

       <div class="row">
        <input type="hidden" name="id_rl_karyawan" value="<?php echo $aku->id_rl_karyawan ?>">
                <div class="col-md-4">
                    <div class="form-group"><br>
                    <label>Foto</label><br><br>
                         <input type="file" name="">
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
                <label>Nomer Telepon</label>
                <input type="text" value="<?php echo $aku->nomor_telepon ?>" name="nomor_telepon" class="form-control" >
              </div>
            </div>
                    </div>
                    <!-- /row-->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name=""  class="form-control">
                            </div>
                        </div>
                    </div>
                 
                </div>
            </div>

      </div>
      <!-- /.container-fluid-->
    </div>
        <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
            <button class="btn btn-primary">Simpan</button>
          </div>
      </form>
    </div>
  </div>
   <?php } ?>
    <p style="text-align: center;"><a href=""class="btn_1 medium" class="nav-link" data-toggle="modal" data-target="#edit_profil">Edit</a></p>