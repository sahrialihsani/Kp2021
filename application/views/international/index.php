<!DOCTYPE html>
<html lang="en">
<link href="<?=base_url('assets/dua/css/footer.css')?>" rel="stylesheet">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <script language='JavaScript'>
var txt="UPT KSLI UNIB |  GLOBAL OPPORTUNITY ";
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
  <link href="assets/dua/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/dua/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/dua/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/dua/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/dua/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?=base_url('')?>assets/dua/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/dua/vendor/venobox/venobox.css" rel="stylesheet">
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
<section style="background-color:#e3f7ff; margin-top:100px" id="oportunity" class="oportunity">
      <div class="container section-title">
      <h2 class="justify-content-center text-center" style=" font-weight: 700;
  margin-bottom: 5px;
  font-size: 30px;
  color: #05579e;"><?php echo __e('list');?></h2>
       <br>
       <?php foreach($data_program as $prg):?>

       <div class="col-lg-12 mt-1 justify-content-center" style="background-color:#fcfcfc;width:100%;height:60px;border-radius: 10px;">
        
        <p class=" float-left" style=" font-weight: 500;
          font-size: 14px;
          color: #05579e;"><?=$prg->tahun?></p>
          <br>
          <a class="float-left mt-2" href="<?=base_url('program/detailProgram/').$prg->id?>"><?=$prg->nama?></a>      
        </div>
      <br>

<?php endforeach?>
  
      
        </div>
      </div>
    </section><!-- End Contact Section -->
<section style="background-color:#fff;" id="oportunity" class="oportunity">
      <div class="container section-title">
      <h2 class="justify-content-center text-center" style=" font-weight: 700;
  font-size: 30px;
  color: #05579e;"><?php echo __e('mobility');?></h2>
      <br>
       
      <?= $this->session->flashdata('message'); ?>

          <div class="col-lg-12 mt-5 mt-lg-0 justify-content-center">

          <form action="<?=base_url('program/uploadBerkas');?>" method="post" enctype="multipart/form-data" class="form-horizontal" >
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Anda" required/>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email Anda" required/>
                </div>
              </div>
              <div class="form-group">
                 <select name="status" class="form-control" required>
                 <option selected="true" disabled="disabled">Pilih Salah Satu</option>
                <option>Dosen</option>
                <option>Tendik</option>
                <option>Mahasiswa</option>
                </select>
              </div>
              <div class="form-group">
              <p class="float-left">Masukan berkas anda: </p>
              <input type="file" class="form-control" name="berkas" id="berkas" required/>
              </div>
              <div class="form-group">
              <i style="color:#03a5fc; padding-top:4px; padding-right:5px" class="icofont-file-pdf float-left"></i><a class="float-left" href="<?=base_url('program/syarat')?>">Lihat Syarat</a>
              </div>     
              <br>         
              <div class="text-center"><button style="border-radius:10px;height:40px; width:100px" class="btn-primary" type="submit">Daftar</button></div>
          </div>
        </form>

        </div>

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