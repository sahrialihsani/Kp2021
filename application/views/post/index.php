<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <script language='JavaScript'>
var txt="UPT KSLI UNIB | POSTING ";
var speed=300;
var refresh=null;
function action() { document.title=txt;
txt=txt.substring(1,txt.length)+txt.charAt(0);
refresh=setTimeout("action()",speed);}action();
</script>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url('')?>assets/dua/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url('')?>assets/dua/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?= base_url('')?>assets/dua/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url('')?>assets/dua/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?= base_url('')?>assets/dua/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?=base_url('')?>assets/dua/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?= base_url('')?>assets/dua/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="<?= base_url('')?>assets/dua/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?=base_url('')?>assets/dua/css/footer.css" rel="stylesheet">
  <link href="<?=base_url('')?>assets/dua/css/style.css" rel="stylesheet">
  <link href="<?=base_url('')?>assets/dua/css/preloader.css" rel="stylesheet">
<link href="<?=base_url('assets/dua/css/footer.css')?>" rel="stylesheet">
<link href="<?=base_url('')?>assets/dua/css/header.css" rel="stylesheet">




  <!-- =======================================================
  * Template Name: Anyar - v2.2.1
  * Template URL: https://bootstrapmade.com/anyar-free-multipurpose-one-page-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<body>
  <main id="main">
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <h2><?php echo __e('berita'); ?></h2>
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container">

        <div class="row">

        <?php foreach($data_berita as $berita):?>

<div class="col-lg-4  col-md-6 d-flex align-items-stretch" data-aos="fade-up">
  <article class="entry">

    <div class="entry-img">
      <img src="<?=base_url('assets/dua/img/berita/').$berita->gambar?>" alt="" class="img-fluid">
    </div>

    <h2 class="entry-title">
      <a><?=$berita->judul?></a>
    </h2>

    <div class="entry-meta">
      <ul>
        <li class="d-flex align-items-center"><i class="icofont-user"></i> <a>Admin KSlI</a></li>
        <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a><?=date('d F Y', strtotime($berita->tgl_posting)); ?></a></li>
      </ul>
    </div>

    <div class="entry-content">
      <p>
       <?php echo word_limiter("$berita->isi",30);?>
      </p>
      <div class="read-more">
        <a href="<?= base_url('post/detailberita/').$berita->id?>"><?php echo __e('more'); ?></a>
      </div>
    </div>

  </article><!-- End blog entry -->
</div>
<?php endforeach?>
        </div>

      </div>
    </section><!-- End Blog Section -->
  <div id="preloader"></div>
</main>
  <script src="<?=base_url('')?>assets/dua/vendor/jquery/jquery.min.js"></script>
  <script src="<?=base_url('')?>assets/dua/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?=base_url('')?>assets/dua/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="<?=base_url('')?>assets/dua/vendor/php-email-form/validate.js"></script>
  <script src="<?=base_url('')?>assets/dua/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="<?=base_url('')?>assets/dua/vendor/venobox/venobox.min.js"></script>
  <script src="<?=base_url('')?>assets/dua/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?=base_url('')?>assets/dua/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="<?=base_url('assets/dua/js/main.js')?>"></script>
  <script src="<?=base_url('assets/dua/js/js2.js')?>"></script>
  <script src="<?=base_url('assets/dua/js/js3.js')?>"></script>
  <script src="<?=base_url('assets/dua/js/preloader.js')?>"></script>


</body>

</html>