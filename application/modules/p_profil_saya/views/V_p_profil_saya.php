<div class="content-wrapper">
    <div class="container-fluid">
<ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Akun saya</li>
      </ol>
      <?php
    foreach ($tampil as $aku) {
        $id = $aku->id_rl_perusahaan;
?>
		<div class="box_general padding_bottom">
			<div class="header_box version_2">
				<h2><i class="fa fa-user"></i>Akun saya</h2>
			</div>
			<div class="row">
				<div class="col-md-4">
          <div class="form-group">
          <label style="font-size: 18px; margin-left: 7%; margin-top: 10%;">Foto</label>
					<div class="form-group" style="margin-left: 7%; margin-top: 5%;">
                <img  src="<?= base_url(); ?>assets/cakar/img/<?= $aku->logo_perusahaan ?>" width="180px" height="180px">
				    </div>
				</div>
      </div>
				<div class="col-md-8 add_top_30" style="margin-left: -10%; margin-top: 5%;">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Nama Perusahaan</label>
								<input type="text" disabled="disabled" value="<?php echo $aku->nama_perusahaan ?>" class="form-control">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Telepon Perusahaan</label>
								<input type="text" disabled="disabled" value="<?php echo $aku->telepon_perusahaan ?>" class="form-control">
							</div>
						</div>
					</div>
					<!-- /row-->
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Email Perusahaan</label>
								<input type="text" disabled="disabled" value="<?php echo $aku->email_perusahaan ?>" class="form-control">
							</div>
						</div>
					</div>
					<!-- /row-->
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Alamat lengkap perusahaan</label>
								<input style="height:100px;" disabled="disabled" value="<?php echo $aku->alamatlengkap_perusahaan ?>" class="form-control">
							</div>
						</div>
					</div>
					<!-- /row-->
				</div>
			</div>
		</div>
		<p style="text-align: center;"><a href=""class="btn_1 medium" class="nav-link" data-toggle="modal" data-target="#edit_profil">Edit</a></p>
	  </div>
	</div>
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
           <form method="post" action="<?php echo base_url().'p_profil_saya/taka'; ?>" enctype="multipart/form-data">

           <div class="modal-body">
                  <form class="form-horizontal">              
                          <div class="panel-body">
 

       <div class="row">
        <input type="hidden" name="id_rl_perusahaan" value="<?php echo $aku->id_rl_perusahaan ?>">
                <div class="col-md-4">
                    <div class="form-group"><br>
                    <label style="margin-top: 0px">Foto</label><br><br>
                         <input type="file" name="logo_perusahaan" class="form-control" id="userfile" onchange="tampilkanPreview(this,'preview_3x4')">
                    </div>
                </div>

                <label for="" class="control-label"></label>
            <img style="margin-top: 123px; margin-left: -250px; " src="<?= base_url(); ?>assets/cakar/img/<?= $aku->logo_perusahaan ?>"  id="preview_3x4" width="237" height="220"  />

                <div class="col-md-8 add_top_30">
                    <div class="row">
                        <div class="col-md-6">
                            <div style="margin-left: 40px; margin-top:10px" class="form-group">
                                <label>Nama perusahaan</label>
                                <input type="text" style="width: 236px" name="nama_perusahaan"  class="form-control" value="<?php echo $aku->nama_perusahaan?>">
                            </div>
                        </div>
                    <div class="col-md-6">
              <div style="margin-left: 20px" class="form-group">
                <label style="margin-top: 10px"> perusahaan</label>
                <input type="text" value="<?php echo $aku->telepon_perusahaan ?>" name="telepon_perusahaan" class="form-control">
              </div>
            </div>
                    </div>
                    <!-- /row-->
                    <div class="row">
                        <div style="margin-left: 40px" class="col-md-6">
                            <div class="form-group">
                                <label>Email perusahaan</label>
                                <input type="text" value="<?php echo $aku->email_perusahaan ?>" name="email_perusahaan"  class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
						<div class="col-md-12">
							<div style="margin-left: 40px" class="form-group">
								<label>Alamat lengkap perusahaan</label>
								<input type="text" style="height:100px;" value="<?php echo $aku->alamatlengkap_perusahaan ?>" name="alamatlengkap_perusahaan" class="form-control">
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
  </form>
<?php } ?>

<script>
function tampilkanPreview(userfile,idpreview)
{
  var gb = userfile.files;
  for (var i = 0; i < gb.length; i++)
  {
    var gbPreview = gb[i];
    var imageType = /image.*/;
    var preview=document.getElementById(idpreview);
    var reader = new FileReader();
    if (gbPreview.type.match(imageType))
    {
      //jika tipe data sesuai
      preview.file = gbPreview;
      reader.onload = (function(element)
      {
        return function(e)
        {
          element.src = e.target.result;
        };
      })(preview);
      //membaca data URL gambar
      reader.readAsDataURL(gbPreview);
    }
      else
      {
        //jika tipe data tidak sesuai
        alert("Tipe file tidak sesuai. Gambar harus bertipe .png, .gif atau .jpg.");
      }
  }
}
</script>
