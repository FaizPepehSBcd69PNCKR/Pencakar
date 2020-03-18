<div class="content-wrapper">
    <div class="container-fluid">

<ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Karyawan</li>
  </ol>

  <?php
    foreach ($tampil as $aku) {
        $id = $aku->id_rl_perusahaan;
?>
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
            <!-- <div class="filter">
                <select name="orderby" class="selectbox">
                    <option value="Any time">Any time</option>
                    <option value="Latest">Latest</option>
                    <option value="Oldest">Oldest</option>
                </select>
            </div> -->
        </div>
  <div class="row">
     <div class="col-md-6">
        <div class="list_general">
            <ul>
                <li>
                    <figure><img src="img/avatar1.jpg" alt=""></figure>
                    <small>Karyawan</small>
                    <h4>Mohammad Riski R</h4>
                    <p>Web Developer</p>
                    <p><a href="detail_karyawan.html" class="btn_1 gray"> Detail Karyawan</a></p>
                    <ul class="buttons">
                        <li><a href="#0" class="btn_1 gray delete wishlist_close"><i class="fa fa-fw fa-times-circle-o"></i> Pecat</a></li>
                    </ul>
                </li>
    </ul>
  </div>
</div>
   <div class="col-md-6">
  <div class="list_general">
    <ul>
      <li>
        <figure><img src="img/avatar2.jpg" alt=""></figure>
        <small>Karyawan</small>
        <h4>Mohammad Riski R</h4>
        <p>Web Developer</p>
        <p><a href="../account1.html" class="btn_1 gray"> Detail Karyawan</a></p>
        <ul class="buttons">
          <li><a href="#0" class="btn_1 gray delete wishlist_close"><i class="fa fa-fw fa-times-circle-o"></i> Pecat</a></li>
        </ul>
      </li>
    </ul>
  </div>
</div>
</div>
<div class="row">
   <div class="col-md-6">
  <div class="list_general">
    <ul>
      <li>
        <figure><img src="img/avatar3.jpg" alt=""></figure>
        <small>Karyawan</small>
        <h4>Mohammad Riski R</h4>
        <p>Web Developer</p>
        <p><a href="../account1.html" class="btn_1 gray"> Detail Karyawan</a></p>
        <ul class="buttons">
          <li><a href="#0" class="btn_1 gray delete wishlist_close"><i class="fa fa-fw fa-times-circle-o"></i> Pecat</a></li>
        </ul>
      </li>
    </ul>
  </div>
</div>
 <div class="col-md-6">
  <div class="list_general">
    <ul>
      <li>
        <figure><img src="img/avatar4.jpg" alt=""></figure>
        <small>Karyawan</small>
        <h4>Mohammad Riski R</h4>
        <p>Web Developer</p>
        <p><a href="../account1.html" class="btn_1 gray"> Detail Karyawan</a></p>
        <ul class="buttons">
          <li><a href="#0" class="btn_1 gray delete wishlist_close"><i class="fa fa-fw fa-times-circle-o"></i> Pecat</a></li>
        </ul>
      </li>
    </ul>
  </div>
</div>
</div>
<div class="row">
  <div class="col-md-6">
  <div class="list_general">
    <ul>
      <li>
        <figure><img src="img/avatar5.jpg" alt=""></figure>
        <small>Karyawan</small>
        <h4>Mohammad Riski R</h4>
        <p>Web Developer</p>
        <p><a href="../account1.html" class="btn_1 gray"> Detail Karyawan</a></p>
        <ul class="buttons">
          <li><a href="#0" class="btn_1 gray delete wishlist_close"><i class="fa fa-fw fa-times-circle-o"></i> Pecat</a></li>
        </ul>
      </li>
    </ul>
  </div>
</div>
 <div class="col-md-6">
  <div class="list_general">
    <ul>
      <li>
        <figure><img src="img/avatar6.jpg" alt=""></figure>
        <small>Karyawan</small>
        <h4>Mohammad Riski R</h4>
        <p>Web Developer</p>
        <p><a class="btn_1 gray"> Detail Karyawan</a></p>
        <ul class="buttons">
          <li><a href="#0" class="btn_1 gray delete wishlist_close"><i class="fa fa-fw fa-times-circle-o"></i> Pecat</a></li>
        </ul>
      </li>
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
  </div>
</div>
<?php } ?>