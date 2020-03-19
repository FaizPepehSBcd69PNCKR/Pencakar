<?php 
foreach ($tampil as $key) {
  $id = $key->id_rl_perusahaan

 ?>
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Perusahaan</li>
      </ol>
      <center>
    <div class="box_general padding_bottom">
      <div class="header_box version_2">
        <h2 style="margin-left: -43%;"><i class=" icon-commerical-building" style="color: black;"></i>Perusahaan yang telah menjadi tempat bekerja anda</h2>
      </div>
      <div class="row">
        <div class="col-md-11">
          <div class="form-group">
            <br><br>
            <center>
          <div class="form-group" style="margin-left: 7%; margin-top: -4%;">
                <img src="assets/akun/img/logounilever.png" width="200px" height="200px" class="rounded-circle">
            </div>
            </center>
        </div>
      </div>
    </div>
      <div class="panel pad-all">
        <div class="col-md-5">
            <div class="blog-title media-block">
                <a href="#" class="btn-link">
                    <h2><?php echo $key->nama_perusahaan ?></h2>
                </a>
            </div>
            <div class="blog-body">
                <p>PT Unilever Indonesia Tbk adalah perusahaan Indonesia yang merupakan anak perusahaan dari Unilever. Perusahaan ini sebelumnya bernama Lever Zeepfabrieken N.V.</p>
                <p style="margin-top: -10px;">Kantor Pusat : Jakarta</p>
                <p style="margin-top: -20px;">Posisi : Karyawan</p>
                <!-- <center><button class="btn btn-danger"data-toggle="modal" data-target="#tambah">Mengundurkan diri</button></center><br> -->
                <center><a class="btn btn-danger" href="<?php echo base_url('tempat_bekerja/hapus/'. $key->id_rl_perusahaan) ?>">Mengundurkan diri</a></center><br>
              </div>
            </div>
          </div>
        </div>
          </center>
      
          <!-- /row-->
        </div>
      </div>
      <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Pesan</h5>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="panel-body">
                        <input style="height:100px;" placeholder="ketik pesan . . . " rows="5" class="form-control">
                    </div>
                </form>
            </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
            <button class="btn btn-primary">Kirim</button>
          </div>
          </div>
        </div>
      </div>
    <?php } ?>