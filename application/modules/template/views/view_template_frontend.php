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
    <link rel="shortcut icon" href="<?php echo base_url(). 'assets/cakar/img/12.png' ?>" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="assets/cakar/img/12.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="<?php echo base_url(). 'assets/cakar/css/bootstrap.min.css' ?>" rel="stylesheet">
    <link href="<?php echo base_url(). 'assets/cakar/css/style.css' ?>" rel="stylesheet">
    <link href="<?php echo base_url(). 'assets/cakar/css/vendors.css'?>" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="<?php echo base_url(). 'assets/cakar/css/custom.css' ?>" rel="stylesheet">
    <link href="<?php echo base_url(). 'assets/akun/vendor/dropzone.css' ?>" rel="stylesheet">

</head>

<body>
    
    
 <br><br><br>
            


                <!--Page content-->
                <!--===================================================-->
                <div id="page-content">

                        <?php
                                  $this->load->view($akunhmvc .'/'.$akunhmvcview);
                                ?>

                </div>
                <!--===================================================-->
    <!--/footer-->
    <!-- page -->
    
    <!-- COMMON SCRIPTS -->
    <script src="<?php echo base_url(). 'assets/cakar/js/common_scripts.js' ?>"></script>
    <script src="<?php echo base_url(). 'assets/cakar/js/functions.js' ?>"></script>
    <script src="<?php echo base_url(). 'assets/cakar/assets/validate.js' ?>"></script>
    <script src="<?php echo base_url(). 'assets/akun/vendor/dropzone.js' ?>"></script>
    
    <!-- SPECIFIC SCRIPTS -->
    <script src="js/video_header.js"></script>

</body>
</html>