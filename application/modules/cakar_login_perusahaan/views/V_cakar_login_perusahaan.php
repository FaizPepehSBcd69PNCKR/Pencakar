<body id="login_bg">
	
	<nav id="menu" class="fake_menu"></nav>
		<form method="post" action="<?php echo base_url().'cakar_login_perusahaan/aksi_login'; ?>">
	<div id="login">
		<aside>
			<figure>
				<a href="index.html"><img src="assets/cakar/img/12.png" width="165" height="35" alt="" class="logo_sticky"></a>
			</figure>
			  <form>
				<div class="form-group">
					<label>Nomor Telepon</label>
					<input type="text" class="form-control pe-7s-call" name="telepon_perusahaan" >
					
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" class="form-control icon_lock_alt" name="katasandi_perusahaan" >
					<br>
					<button class="btn_1 rounded full-width">Login </button>
					
				</div>
				<div class="clearfix add_bottom_30">
					<div class="checkboxes float-left">
						<!-- <label class="container_check">Re -->
						  <!-- <input type="checkbox"> -->
						  <span class="checkmark"></span>
						</label>
						
					</div>
					 <div  class="btn_1 rounded full-width"><a href="lupa_password.html" style="color: white;">Lupa Password?</a></div>
				<div class="text-center add_top_10">Belum Punya Akun ? <strong><a href="register.html">Daftar Sekarang!</a></strong></div>
				<a href="index-2.html" style="margin-left: 42%; margin-top: 300px; color: Blue;" class="text-center add_top_10"><strong>Kembali</strong> </a>
			</form>
			
			<div class="copy">© 2020 PENCAKAR</div>
		</aside>
	</div>
	<!-- /login -->