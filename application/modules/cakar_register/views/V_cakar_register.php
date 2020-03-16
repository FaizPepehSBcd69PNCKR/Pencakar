<body id="register_bg">
	
	<nav id="menu" class="fake_menu"></nav>
	
	<div id="login">
		<aside>
			<figure>
				<a href="about.html"><img src="assets/cakar/img/12.png" width="165" height="50" alt="" class="logo_sticky"></a>
			</figure>
		<form method="post" action="<?php echo base_url().'cakar_register/taka'; ?>">
				<div class="form-group">
					<label>Nama Lengkap</label>
					<input class="form-control" name="nama_lengkap" type="text">
					<i class="ti-user"></i>
				</div>
				<div class="form-group">
					<label>Nomor Telepon</label>
					<input class="form-control" name="nomor_telepon" type="text">
					<i class="pe-7s-call"></i>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input class="form-control" type="password" name="kata_sandi" >
					<i class="icon_lock_alt"></i>
				</div>

				<div class="form-group">
					<label>Confirmasi Password</label>
					<input class="form-control" type="password" name="kata_sandi">
					<i class="icon_lock_alt"></i>
				</div>
				<button  class="btn_1 rounded full-width add_top_30">Daftar Sekarang!</button>
				<!-- <div class="text-center add_top_10">Sudah memiliki akun? <strong>Masuk</strong></div> -->
				</form>
				
		
			<div class="copy">© 2020 PENCAKAR</div>
			
		</aside>
	</div>
	
</body>
	<!-- /login -->
	
	<!-- COMMON SCRIPTS -->
    <script src="js/common_scripts.js"></script>
	<script src="js/functions.js"></script>
	<script src="assets/validate.js"></script>
	
	<!-- SPECIFIC SCRIPTS -->
	<script src="js/pw_strenght.js"></script>
	
	
  
</body>
</html>