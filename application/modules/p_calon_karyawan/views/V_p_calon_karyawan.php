  <div class="content-wrapper">
    <div class="container-fluid">
<ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Hasil Rekrut</li>
  </ol>
    <div class="box_general">
         <div class="header_box">
    <div class="filter">
      <select name="orderby" class="selectbox">
        <option value="Any status">Semua</option>
        <option value="Approved">Dipecat</option>
        <option value="Pending">Keluar</option>
      </select>
    </div>
            <h2 class="d-inline-block"><i class="fa fa-user"></i> &nbsp;Rekrutmen</h2>
  </div>
  <div class="row">
  <div class="col-md-6">
        <div class="list_general">
            <ul>
      
                <li>
                  <?php foreach ($tampil as $key) {
                   ?>
                    <figure><img src="<?= base_url(); ?>assets/cakar/img/<?= $key->foto_3x4 ?>" class="rounded-circle" width="80" height="80" alt=""></figure>
                    <h4>Calon Karyawan &nbsp;  <!-- <i class="pending">Pending</i> --></h4>
                    <ul class="booking_list">
                        <li><strong>Nama </strong> <?php echo $key->nama_lengkap ?></li>
                        <li><strong>Keahlian</strong><?php echo $key->keahlian ?></li>
                    </ul>
                      <p>
           <a href="#0" class="btn_1 gray" class="nav-link" data-toggle="modal" data-target="#pesan_karyawan" style="margin-left: 0%;"><i class="fa fa-fw fa-envelope"></i> Kirim pesan</a>
            <a href="#0" class="btn_1 gray approve"><i class="fa fa-fw fa-check-circle-o"></i> Rekrut</a> &nbsp;&nbsp;
            <a href="#0" class="btn_1 gray delete"><i class="fa fa-fw fa-times-circle-o"></i> Batal</a>
        </p>
                </li>
              <?php } ?>
    </ul>
    </div>
  </div>
</div>
    
    </div>
    <!-- /box_general-->
    <nav aria-label="...">
        <ul class="pagination pagination-sm add_bottom_30">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>

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