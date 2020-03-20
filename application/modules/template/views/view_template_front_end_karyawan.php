<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="SPARKER - Premium directory and listings template by Ansonika.">
    <meta name="author" content="Ansonika">
    <title>PENCAKAR | Pencari Karyawan</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="assets/cakar/img/12.png" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="assets/cakar/img/12.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="<?php echo base_url('assets/cakar/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/cakar/css/style.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/cakar/css/vendors.css')?>" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="<?php echo base_url('assets/cakar/css/custom.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/akun/vendor/dropzone.css')?>" rel="stylesheet">

</head>

<body>
        
    <div id="page">
        
    <header class="header_in is_sticky menu_fixed">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-12">
                    <div id="logo">
                        <a href="index-2.html">
                            <img src="assets/cakar/img/12.png" width="165" height="50" alt="" class="logo_sticky">
                        </a>
                    </div>
                </div>
                <div class="col-lg-9 col-12">
                    <ul id="top_menu">
                        <li><a class="btn_add" href="<?php echo base_url('cv_karyawan'); ?>">Daftar Calon Karyawan</a></li>
                        <li><a href="#sign-in-dialog" id="sign-in"  class="btn btn-info" title="Sign In" style="font-size: 13px; color: white;">Log Out</a></li>
                    </ul>
                    <!-- /top_menu -->
                    <a href="#menu" class="btn_mobile">
                        <div class="hamburger hamburger--spin" id="hamburger">
                            <div class="hamburger-box">
                                <div class="hamburger-inner"></div>
                            </div>
                        </div>
                    </a>
                    <nav id="menu" class="main-menu">
                        <ul>
                            <li><span><a href="<?php echo base_url('portal2_index'); ?>">Beranda</span></li></a>
                            <li><span><a href="<?php echo base_url('cakar_perusahaan_portal2'); ?>">Calon Karyawan</a></span></li>
                            <li><span><a href="#0">Halaman</a></span>
                                <ul>
                                    <li><a href="<?php echo base_url('blog'); ?>">Blog</a></li>
                                    <li><a href="<?php echo base_url('portal2_index'); ?>"></a></li>
                                    <li><a href="about.html">Tentang Kami</a></li>
                                    <li><a href="media-gallery.html">Testimoni</a></li>
                                </ul>
                            </li>
                            <li><span><a href="faq.html">Bantuan</a></span></li>
                            <li><span><a href="#0">Login & Register</a></span>
                                <ul>
                                    <li><span><a href="#0">Login</a></span>
                                        <ul>
                                            <li><a href="login.html">Login Karyawan</a></li>
                                            <li><a href="login2.html">Login Perusahaan</a></li>
                                        </ul>
                                    </li>
                                    <li><span><a href="#0">Register</a></span>
                                        <ul>
                                            <li><a href="register.html">Register Karyawan</a></li>
                                            <li><a href="register2.html">Register Perusahaan</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /row -->
        </div>
        
        <!-- /container -->     
    </header>
    
    
 <br><br><br>
  <!--CONTENT CONTAINER-->
            <!--===================================================-->
            


                <!--Page content-->
                <!--===================================================-->
                <div id="page-content">

                        <?php
                                  $this->load->view($cakarhmvc .'/'.$cakarhmvcview);
                                ?>

                </div>
                <!--===================================================-->
                <!--End page content-->

            
            <!--===================================================-->
            <!--END CONTENT CONTAINER-->

    <footer class="plus_border">
        <div class="container margin_60_35">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <h3 data-target="#collapse_ft_1">Pintasan</h3>
                    <div class="collapse dont-collapse-sm" id="collapse_ft_1">
                        <ul class="links">
                            <li><a href="index-2.html">Beranda</a></li>
                            <li><a href="grid-listings-filterscol.html">Calon Karyawan</a></li>
                            <li><a href="about.html">Tentang Kami</a></li>
                            <!-- <li><a href="contacts-2.html">Daftar Calon Karyawan</a></li> -->
                            <li><a href="login.html">Register</a></li>
                            <li><a href="login.html">Login</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <h3 data-target="#collapse_ft_2">Kategori Keahlian</h3>
                    <div class="collapse dont-collapse-sm" id="collapse_ft_2">
                        <ul class="links">
                            <li><a href="grid-listings-filterscol.html">Web Developer</a></li>
                            <li><a href="grid-listings-filterscol.html">Keuangan</a></li>
                            <li><a href="grid-listings-filterscol.html">Otomotif</a></li>
                            <li><a href="grid-listings-filterscol.html">Design Grafis</a></li>
                            <li><a href="grid-listings-filterscol.html">Reporter Atau Penyiar</a></li>
                            <li><a href="grid-listings-filterscol.html">Restaurant Atau Pelayan</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <h3 data-target="#collapse_ft_3">Kontak</h3>
                    <div class="collapse dont-collapse-sm" id="collapse_ft_3">
                        <ul class="contacts">
                            <li><i class="ti-home"></i>Perum Permata Regency <br>Karang Ploso - Malang</li>
                            <li><i class="ti-headphone-alt"></i>+62 83851384987</li>
                            <li><i class="ti-email"></i><a href="#0">pepehfatur32@gmail.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <h3 data-target="#collapse_ft_4">Butuh Bantuan?</h3>
                    <div class="collapse dont-collapse-sm" id="collapse_ft_4">
                        <div id="newsletter">
                            <div id="message-newsletter"></div>
                            <form method="post" action="assets/newsletter.php" name="newsletter_form" id="newsletter_form">
                                <div class="form-group">
                                    <input type="email" name="email_newsletter" id="email_newsletter" class="form-control" placeholder="Masukkan emai anda">
                                    <input type="submit" value="Kirim" id="submit-newsletter">
                                </div>
                            </form>
                        </div>
                        <div class="follow_us">
                            <h5>Ikuti Kami</h5>
                            <ul>
                                <li><a href="#0"><i class="ti-facebook"></i></a></li>
                                <li><a href="#0"><i class="ti-twitter-alt"></i></a></li>
                                <li><a href="#0"><i class="ti-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /row-->
            
            <div class="row">
                <div class="col-lg-8">
                    <ul id="additional_links">
                        <li><a href="#0">Syarat dan ketentuan</a></li>
                        <li><a href="#0">Privasi</a></li>
                        <li><span>© 2020 PENCAKAR</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!--/footer-->
    </div>
    <!-- page -->
    
    <div id="toTop"></div><!-- Back to top button -->
    
    <!-- COMMON SCRIPTS -->
    <script src="<?php echo base_url('assets/cakar/js/common_scripts.js')?>"></script>
    <script src="<?php echo base_url('assets/cakar/js/functions.js')?>"></script>
    <script src="<?php echo base_url('assets/cakar/assets/validate.js')?>"></script>
    <script src="<?php echo base_url('assets/akun/vendor/dropzone.js')?>"></script>
    
    <!-- SPECIFIC SCRIPTS -->
    <script src="<?php echo base_url('js/video_header.js')?>"></script>
    <script>
        HeaderVideo.init({
            container: $('.header-video'),
            header: $('.header-video--media'),
            videoTrigger: $("#video-trigger"),
            autoPlayVideo: true
        });
    </script>

</body>
</html>