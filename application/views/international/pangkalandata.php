<!DOCTYPE html>
<html lang="en">
<link href="<?=base_url('assets/dua/css/footer.css')?>" rel="stylesheet">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <script language='JavaScript'>
var txt="UPT KSLI UNIB | PANGKALAN DATA KERJASAMA ";
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


  <!-- =======================================================
  * Template Name: Anyar - v2.2.1
  * Template URL: https://bootstrapmade.com/anyar-free-multipurpose-one-page-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<body>
<main id="main">
<section class="counts" style="margin-top:100px; margin-bottom:20px">
<h2 class="justify-content-center text-center" style=" font-weight: 700;
  margin-bottom: 20px;
  font-size: 30px;
  color: #05579e;">Pangkalan Data Kerjasama</h2>
      <div style="margin-bottom:20px" class="container-fluid justify-content-center">

        <div class="row">

          <div class="col-lg-4 col- text-center" data-aos="fade-up">
            <div style="border-radius:20px;background-color:#ffffff" class="count-box">
            <i class="icofont-university" style="color: #91daff;"></i>
              <span data-toggle="counter-up"><?=$total_universitas?></span>
              <p>Perguruan Tinggi</p>
        <button onclick="window.location.href='<?=base_url('program/university')?>'" style="border-radius:10px;margin-top:10px" class="btn btn-primary">Lihat Data</button>

            </div>

          </div>

          <div class="col-lg-4 text-center" data-aos="fade-up" data-aos-delay="200">
          <div style="border-radius:20px; background-color:#ffffff" class="count-box">
          <i class="icofont-institution" style="color: #91daff;"></i>

              <span data-toggle="counter-up"><?=$total_pemerintahan?></span>
              <p>Instansi Pemerintahan</p>
              <button onclick="window.location.href='<?=base_url('program/goverment')?>'" style="border-radius:10px;margin-top:10px" class="btn btn-primary">Lihat Data</button>

            </div>

          </div>

          <div class="col-lg-4 text-center" data-aos="fade-up" data-aos-delay="400">
          <div style="border-radius:20px;background-color:#ffffff" class="count-box">
          <i class="icofont-building" style="color: #91daff;"></i>

              <span data-toggle="counter-up"><?=$total_swasta?></span>
              <p>Perusahaan/Swasta</p>
              <button onclick="window.location.href='<?=base_url('program/institution')?>'" style="border-radius:10px;margin-top:10px" class="btn btn-primary">Lihat Data</button>

            </div>

          </div>
        </div>
      </div>
    </section><!-- End Counts Section -->

  <div id="preloader"></div>
</main>
  <!-- ======= Footer ======= -->


  <script src="<?=base_url('')?>assets/dua/vendor3/jquery/jquery.min.js"></script>
  <script src="<?=base_url('')?>assets/dua/vendor3/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?=base_url('')?>assets/dua/vendor3/jquery.easing/jquery.easing.min.js"></script>
  <script src="<?=base_url('')?>assets/dua/vendor3/php-email-form/validate.js"></script>
  <script src="<?=base_url('')?>assets/dua/vendor3/jquery-sticky/jquery.sticky.js"></script>
  <script src="<?=base_url('')?>assets/dua/vendor3/venobox/venobox.min.js"></script>
  <script src="<?=base_url('')?>assets/dua/vendor3/waypoints/jquery.waypoints.min.js"></script>
  <script src="<?=base_url('')?>assets/dua/vendor3/counterup/counterup.min.js"></script>
  <script src="<?=base_url('assets/dua/vendor3/owl.carousel/owl.carousel.min.js')?>"></script>
  <script src="<?=base_url('')?>assets/dua/vendor3/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?=base_url('')?>assets/dua/vendor3/aos/aos.js"></script>
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
  <script src="<?=base_url('assets/dua/js/preloader.js')?>"></script>
  <script src="<?=base_url('assets/dua/js/js3.js')?>"></script>


</body>

</html>