<!DOCTYPE html>
<html lang="en">
<link href="<?=base_url('assets/dua/css/footer.css')?>" rel="stylesheet">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <script language='JavaScript'>
var txt="UPT KSLI UNIB | DETAIL PROGRAM ";
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
<section style="background-color:#fff; margin-top:100px" id="oportunity" class="oportunity">
   
      <div class="container section-title">
      <?php foreach($data_program as $prg):?>
      <h2 class="justify-content-center text-center" style=" font-weight: 700;
  margin-bottom: 5px;
  font-size: 30px;
  color: #05579e;"><?=$prg->nama?></h2>
  <br>
  <p style=" text-align: justify; text-justify: inter-word;"><strong><?=$prg->tahun?></strong></p>
  <p style=" text-align: justify; text-justify: inter-word;"><?php echo $this->typography->nl2br_except_pre($prg->keterangan);?></p>
  <br>
  <i style="color:#03a5fc; padding-top:4px; padding-right:5px" class="icofont-file-pdf float-left"></i>
  <a class="float-left" href="<?=base_url('program/detailBerkas/').$prg->id?>">Lihat Berkas</a>
  <?php endforeach?>
  <br>
  <br>
  <br>
  <br>
  <br>
     </div>
    </section><!-- End Contact Section -->

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