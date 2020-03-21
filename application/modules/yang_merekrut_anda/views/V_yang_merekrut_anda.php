 <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Hasil Rekrut</li>
      </ol>
    <div class="box_general">
      <div class="header_box">
        <h2 class="d-inline-block">Rekrutmen</h2>
      </div>
      <div class="row">
        <?php 
        foreach ($tampil as $key) {
           ?>
      <div class="col-md-6">
      <div class="list_general">
        <ul>
          
          <li>
            <figure><img  src="<?= base_url(); ?>assets/cakar/foto34/<?= $key->logo_perusahaan ?>" class="rounded-circle" width="80" height="80" alt=""></figure>
            <h4><?php echo $key->nama_perusahaan ?> &nbsp;</h4>
            <ul class="booking_list">
             <li><strong>Alamat Perusahaan&nbsp;:</strong> <?php echo $key->alamatlengkap_perusahaan ?></li> 
              <li><strong>Info Perusahaan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</strong> <?php echo $key->keterangan_perusahaan ?></li>
            </ul>
              <p>
                <a href="#0" class="btn_1 gray approve"><i class="fa fa-fw fa-check-circle-o"></i> Terima</a> &nbsp;&nbsp;
                <a href="#0" class="btn_1 gray delete"><i class="fa fa-fw fa-times-circle-o"></i> Tolak </a>
            </p>
          </li>
        </ul>
        </div>
      </div>
    <?php } ?>
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
    <!-- /pagination-->
    </div>
    <!-- /container-fluid-->
    </div>