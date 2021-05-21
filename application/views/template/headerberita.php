<!-- ======= Top Bar ======= -->
<link href="<?= base_url('')?>assets/dua/img/unib.png" rel="icon">
  <link href="<?= base_url('')?>assets/dua/img/unib.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/dua/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/dua/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/dua/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/dua/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/dua/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/dua/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="<?= base_url('')?>assets/dua/vendor/aos/aos.css" rel="stylesheet">

  <link href="<?=base_url('')?>assets/dua/css/header.css" rel="stylesheet">
  <link href="<?=base_url('')?>assets/dua/css/style.css" rel="stylesheet">
<div style="background-color: rgba(5, 87, 158, 0.9);" id="topbar" class="d-none d-lg-flex align-items-center fixed-top ">
    <div class="container d-flex align-items-center">
      <div class="contact-info mr-auto">
        <ul>
          <li><i class="icofont-envelope"></i><a href="mailto:uptksliunib@gmail.com">uptksliunib@gmail.com</a></li>
          <li><i class="icofont-phone"></i> +62 0873 8798 9011</li>
          <li><i class="icofont-clock-time icofont-flip-horizontal"></i> Senin-Jumat 9.00 - 14.00 WIB</li>
        </ul>
      </div>
      <div class="cta">
      <a href="<?=base_url('Login')?>" class="scrollto">Login Area</a>

      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header style="background: rgba(3, 56, 102, 0.9);" id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">
    <img style="object-fit:contain" src="<?=base_url('assets/dua/img/unib.png')?>" alt="Logo Unib" width="50px" height="50px">
    <h4 style="padding-top:5px; padding-left:10px" class="logo mr-auto"><a href="#header" class="scrollto"><a href="<?=base_url('')?>">OFFICE OF PARTNERSHIP AND <br> INTERNATIONAL AFFAIRS</a></h4>

      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="#header" class="logo mr-auto scrollto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
        <li class="active"><a href="<?php echo base_url('')?>"><?=$menu_beranda?></a></li>
        <li><a href="<?php echo base_url('#about')?>"><?=$menu_tkami?></a></li>
        <li><a href="<?= base_url('post')?>"><?=$menu_berita?></a></li>
        <li class="drop-down"><a href="#"><?=$menu_layanan?></a>
                <ul>
                <li><a href="<?=base_url('program')?>"><?=$beasiswa?></a></li>
                  <li><a href="<?=base_url('program/partners')?>"><?=$pangkalan?></a></li>
                  <li><a href="<?=base_url('program/networking')?>"><?=$jaringan?></a></li>
                  <li><a href="<?=base_url('program/travelservice')?>"><?=$perjalanan?></a></li>
                  <!-- <li><a href="<?=base_url('downloaddata')?>">Unduh Data</a></li> -->
                </ul>
        </li>
        <li><a  href="<?= base_url('#contact')?>"><?=$menu_hubungi?></a></li>

        <!-- <li class="drop-down"><a href="#"><?=$menu_bahasa?></a>
                <ul>
                <?php if(get_cookie('lang_is') === 'en'){ ?>
                  <li><a href="<?php echo site_url('lang_setter/set_to/indonesia');?>">Inggris</a></li>
                 
                  <?php }else{ ?>
                  <li><a href="<?php echo site_url('lang_setter/set_to/english');?>">Indonesia</a></li>
                  <?php } ?>
                </ul>
        </li> -->
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->