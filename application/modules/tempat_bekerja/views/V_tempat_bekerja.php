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
       <?php 
foreach ($tampil as $key) {
 ?>
      <div class="row">
        <div class="col-md-11">
          <div class="form-group">
            <br><br>
            <center>
          <div class="form-group" style="margin-left: 7%; margin-top: -4%;">
                <img src="<?= base_url(); ?>assets/cakar/foto34/<?= $key->logo_perusahaan ?>" width="200px" height="200px" class="rounded-circle">
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
                <p><?php  echo $key->keterangan_perusahaan ?></p>
                <p style="margin-top: -10px;">Kantor Pusat : Jakarta</p>
                <p style="margin-top: -20px;">Posisi : Karyawan</p>
                <center class="btn btn-danger" data-toggle="modal" data-target="#Mengundurkan">Mengundurkan diri</center><br>
              </div>
            </div>
             <?php } ?>
          </div>
        </div>
        
          </center>
      
          <!-- /row-->
        </div>
      </div>
      <div class="modal fade" id="Mengundurkan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Peringatan</h5>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="panel-body">
                        <center><h6>Apakah anda yakin ingin mengundurkan diri?</h6></center>
                    </div>
                </form>
            </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
            <a href="<?php echo base_url().'pesan' ?>"class="btn btn-primary">Yakin</a>
          </div>
          </div>
        </div>
      </div>