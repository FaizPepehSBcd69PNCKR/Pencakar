<main>
		<div id="results">
		   <div class="container">
			   <div class="row">
				   <div class="col-lg-3 col-md-4 col-10">
					   <h4><strong>1459</strong> Hasil Untuk Semua Yang Telah Mendaftar Daftar</h4>
				   </div>
				   <div class="col-lg-9 col-md-8 col-2">
					   <a href="#0" class="search_mob btn_search_mobile"></a>
						<div class="row no-gutters custom-search-input-2 inner">
							<div class="col-lg-5">
								<div class="form-group">
									<div class="col-lg-10">
								<select class="wide">
									<option>Keahlian</option>
								</select>
							</div>
								</div>
							</div>
							<div class="col-lg-3">
								<div class="form-group">
									<div class="col-lg-11">
								<select class="wide">
									<option>Wilayah</option>	
								</select>
							</div>
								</div>
							</div>
							<div class="col-lg-3">
								<select class="wide">
									<option>Pendidikan Terakhir</option>
								</select>
							</div>
							<div class="col-lg-1">
								<input type="submit" value="Search" >
							</div>
						</div>
				   </div>
			   </div>
			   <!-- /row -->
		   </div>
	   </div>
	   <!-- /results -->
	   		
		<div class="filters_listing version_2  sticky_horizontal">
			<div class="container">
				<ul class="clearfix">
					<li>
						<div class="switch-field">
							<input type="radio" id="all" name="listing_filter" value="all" checked>
							<label for="all">Semua</label>
							<input type="radio" id="popular" name="listing_filter" value="popular">
							<label for="popular">Popular</label>
							<input type="radio" id="latest" name="listing_filter" value="latest">
							<label for="latest">Latest</label>
						</div>
					</li>
					<li>
						<div class="layout_view">
							<a href="#0" class="active"><i class="icon-th"></i></a>
							<a href="listing-2.html"><i class="icon-th-list"></i></a>
							<a href="list-map.html"><i class="icon-map"></i></a>
						</div>
					</li>
					<li>
						<a class="btn_map" data-toggle="collapse" href="#collapseMap" aria-expanded="false" aria-controls="collapseMap" data-text-swap="Hide map" data-text-original="View on map">View on map</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="collapse" id="collapseMap">
			<div id="map" class="map"></div>
		</div>
		<div class="container margin_60_35">
			<div class="row">
				<aside class="col-lg-3" id="sidebar">
					<div id="filters_col">
						<a data-toggle="collapse" href="#collapseFilters" aria-expanded="false" aria-controls="collapseFilters" id="filters_col_bt">Filters </a>
						<div class="collapse show" id="collapseFilters">
							<div class="filter_type">
								<h6>Category</h6>
								<ul>
									<li>
										<label class="container_check">IT / Web Developer <small>431</small>
										  <input type="checkbox">
										  <span class="checkmark"></span>
										</label>
									</li>
									<li>
										<label class="container_check">IT Perangkat keras <small>403</small>
										  <input type="checkbox">
										  <span class="checkmark"></span>
										</label>
									</li>
									<li>
										<label class="container_check">IT / Perangkat lunank <small>4003</small>
										  <input type="checkbox">
										  <span class="checkmark"></span>
										</label>
									</li>
									<li>
										<label class="container_check">Akuntansi / Keuangan <small>430</small>
										  <input type="checkbox">
										  <span class="checkmark"></span>
										</label>
									</li>
									<li>
										<label class="container_check">Teknik kendaraan <small>413</small>
										  <input type="checkbox">
										  <span class="checkmark"></span>
										</label>
									</li>
								</ul>
							</div>
					</div>
				</div>
			</aside>
				<div class="col-lg-9">
					<div class="row">
						<?php foreach ($tampil as $key) {
							$id = $key->id_cv
			 			?>
						<div class="col-md-4">
							<div class="strip grid">
								<figure>
									<a href="#0" class="wish_bt"></a>
									<a href="<?php echo base_url('detail_calon_karyawan3/tampil/'. $id); ?>"><img  src="<?= base_url(); ?>assets/cakar/foto34/<?= $key->foto_3x4 ?>" class="img-fluid" style="height: 200px;" alt="">
										<div class="read_more"><span>Selengkapnya</span></div>
									</a>
									
								</figure>
								<div class="wrapper">
									<h3><?php echo $key->nama_lengkap ?></h3>
									<small></small>
									<p><?php echo $key->keahlian ?></p>
									<h20><?php echo $key->nama_jalan ?>,
										<?php echo $key->rt_rw ?>,
										<?php echo $key->desa_kelurahan ?>,
										<?php echo $key->kecamatan ?>,
										<?php echo $key->kota_kabupaten ?>,
										<?php echo $key->provinsi ?></h20>
								</div>
								 <ul>
								 	<li>
										<li><a href="#modal-risky" id="modal-riskyT"  style="font-size: 10px; margin-top: -50px;" class="btn_add">Rekrut</a></li>
									</li>
									<li>
									<a href="<?php echo base_url('detail_calon_karyawan3/tampil/'. $id); ?>" style="font-size: 10px; margin-top: 1%; " class="btn btn-success">Selengkapnya</a>
									
									</li>
								</ul>
							</div>
						</div>
						<?php } ?>
					</div>
				</div>
			
			</div>
		</div>
			<br>

				<div class="pagination__wrapper add_bottom_30">
					<ul>
						<?php echo $this->pagination->create_links(); ?>
					</ul>
				</div>
			</main>


			  