<div class="content-wrapper">
    <div class="container-fluid">

<ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Karyawan</li>
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
            <h2 class="d-inline-block"><i class="fa fa-users"></i> &nbsp;Karyawan</h2>
        </div>
  <div class="row">
    <?php 
    foreach ($tampil as $key) {
     ?>
     <div class="col-md-6">
        <div class="list_general">
            <ul>
                <li>
                    <figure><img src="<?= base_url(); ?>assets/cakar/foto34/<?= $key->foto_3x4 ?>" alt=""></figure>
                    <small>Karyawan</small>
                    <h4><?php echo $key->nama_lengkap ?></h4>
                    <p><?php echo $key->keahlian ?></p>
                    <p><a href="<?php echo base_url('detail_karyawan_akun/index/'.$key->id_cv) ?>" class="btn_1 gray"> Detail Karyawan</a></p>
                    <ul class="buttons">
                        <li><a href="<?php echo base_url('p_karyawan_saya/hapus/'. $key->id_cv) ?>" class="btn_1 gray"><i class="fa fa-fw fa-times-circle-o"></i> Pecat</a></li>
                    </ul>
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
          <?php echo $this->pagination->create_links(); ?>
        </ul>
    </nav>
  </div>
</div>