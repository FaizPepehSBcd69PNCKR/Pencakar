<div class="content-wrapper">
    <div class="container-fluid">
<ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Histori Perusahaan</li>
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
        <h4><i class="fa fa-history"></i> &nbsp;Histori Perusahaan</h4>
  </div>
  <div class="row">
    <?php foreach ($tampil as $key) {
      ?>
  <div class="col-md-6">
        <div class="list_general">
            <ul>
                <li>
                    <span>09-15-2015</span>
                    <figure><img src="<?= base_url(); ?>assets/cakar/foto34/<?= $key->foto_3x4 ?>"></figure>
                    <h4><?php echo $key->nama_lengkap ?><i class="unread">Keluar</i></h4>
                    <p>Karena Gajinya kurang dari 100 juta</p>
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