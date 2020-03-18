 <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Interview </li>
      </ol>

       <div class="box_general">
      <div class="header_box">
        <h2 class="d-inline-block"><i class="icon-wheelchair"></i> &nbsp;Interview karyawan</h2>
      </div>
      <?php foreach ($tampil as $key) {
        $id = $key
       ?>
      <div class="row">
      <div class="col-md-12">
      <div class="list_general">
        <ul>
          
          <li>
            <figure><img src="img/logohummasoft.png" alt="kosong" class="rounded-circle" width="100" height="100" alt=""></figure>
            <h4>Perusahaan &nbsp;</h4>
            <ul class="booking_list">
              <li><strong>Nama Perusahan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</strong><b><?php echo $key->nama_perusahaan ?></b></li>
              <li><strong>Alamat Perusahaan&nbsp;:</strong><b><?php echo $key->alamatlengkap_perusahaan ?></b></li>
            </ul>
            <div class="row">
            <p> <a href="#0" class="btn_1 gray" class="nav-link" data-toggle="modal" data-target="#pesan_karyawan" style="margin-left: 0%;"><i class="fa fa-fw fa-envelope"></i> Kirim pesan</a></p> &nbsp; &nbsp; &nbsp;
             <p> <a href="messages.html" class="btn_1 gray" class="nav-link" style="margin-left: 0%;"><i class="fa fa-fw fa-envelope"></i> Pesan Masuk</a></p>
           </div>
          </li>
        </ul>
        </div>
        </div>
      </div>
    <?php } ?>
    
    <!-- /pagination-->
    </div>
    <!-- /container-fluid-->
    </div>
  </div>
    <!-- /container-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © SPARKER 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <form action="<?php echo base_url().'proses_interview/pesan_karyawan' ?>" method="post">
     <div class="modal fade" id="pesan_karyawan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Pesan</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
                          <div class="panel-body">
                              <input type="text" name="isi_pesan" class="form-control">
                          </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
            <button class="btn btn-primary">Kirim</button>
          </div>
        </div>
      </div>
    </div>
      </form>
      </div>
    </div>