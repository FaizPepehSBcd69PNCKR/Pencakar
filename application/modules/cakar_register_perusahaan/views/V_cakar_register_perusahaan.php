<body id="register_bg">
	
	<nav id="menu" class="fake_menu"></nav>
	
	<div id="login">
		<aside>
			<figure>
				<a href="about.html"><img src="assets/cakar/img/12.png" width="165" height="50" alt="" class="logo_sticky"></a>
			</figure>
		<form method="post" autocomplete="off" action="<?php echo base_url().'cakar_register_perusahaan/taka12'; ?>">
							
				<div class="form-group">
					<label>Nama perusahaan</label>
					<input class="form-control" type="text" name="nama_perusahaan">
					<i class="ti-user"></i>
				</div>
				<div class="form-group">
					<label>Email perusahaan</label>
					<input class="form-control" type="email" name="email_perusahaan">
					<i class="icon_mail_alt"></i>
				</div>
				<div class="form-group">
					<label>Telepon perusahaan</label>
					<input class="form-control" type="text" name="telepon_perusahaan">
					<i class="pe-7s-call"></i>
				</div>
				<div class="form-group">
					<label>Kata sandi</label>
					<input class="form-control" type="text" name="katasandi_perusahaan">
					<i class="icon_lock_alt"></i>
				</div>
				<div class="form-group">
					<label>Alamat lengkap perusahaan</label>
					<textarea style="height:100px;" class="form-control" placeholder="" name="alamatlengkap_perusahaan"></textarea>
				</div>
				 <div class="form-group">
            <label>Logo Perusahaan</label>
            <input type="file" name="foto_perusahaan" class="form-control" id="userfile" onchange="tampilkanPreview(this,'preview_3x4')">
          </div>
          <div class="col-md-4 ">
                           	<label for="" class="control-label"></label>
                            <img id="preview_3x4" width="px" height="150" />
                    </div>
				<div id="pass-info" class="clearfix"></div>
				<button class="btn_1 rounded full-width add_top_30">Daftar Sekarang!</button>
				<div class="text-center add_top_10">Sudah memiliki akun? <strong>Masuk</strong></div>
			</form>
			<div class="copy">© 2020 PENCAKAR</div>
		</aside>
	</div>
	
</body>
	<!-- /login -->
	
	<!-- COMMON SCRIPTS -->
    <script src="assest/cakar/js/common_scripts.js"></script>
	<script src="assest/cakar/js/functions.js"></script>
	<script src="assest/cakar/assets/validate.js"></script>
	
	<!-- SPECIFIC SCRIPTS -->
	<script src="assest/cakar/js/pw_strenght.js"></script>
	
	
  
</body>
</html>
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