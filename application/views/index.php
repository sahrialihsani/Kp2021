<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <script language='JavaScript'>
var txt="UPT KSLI UNIB | BERANDA ";
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
  <link href="assets/dua/vendor2/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?=base_url('')?>assets/dua/vendor2/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/dua/vendor2/venobox/venobox.css" rel="stylesheet">
  <link href="<?= base_url('')?>assets/dua/vendor2/aos/aos.css" rel="stylesheet">

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
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">
        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/dua/img/slide/slide-1.jpg)">
          <div class="carousel-container">
            <div class="container">
            <h2 style="font-size:25px" class="animate__animated animate__fadeInDown"><?php echo __e('welcome'); ?></h2>
            <p style="font-size:15px" class="animate__animated animate__fadeInUp"><?php echo __e('hero1_keterangan'); ?></p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto"><?php echo __e('more'); ?></a>
            </div>
          </div>
        </div>
        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/dua/img/slide/slide-2.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 style="font-size:25px" class="animate__animated animate__fadeInDown"><?php echo __e('welcome'); ?></h2>
              <p style="font-size:15px" class="animate__animated animate__fadeInUp"><?php echo __e('hero1_keterangan'); ?></p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto"><?php echo __e('more'); ?></a>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(assets/dua/img/slide/slide-3.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 style="font-size:25px" class="animate__animated animate__fadeInDown"><?php echo __e('welcome'); ?></h2>
              <p style="font-size:15px" class="animate__animated animate__fadeInUp"><?php echo __e('hero1_keterangan'); ?></p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto"><?php echo __e('more'); ?></a>
            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span style="margin-left:25px" class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span style="margin-right:25px" class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>
</section>
<main id="main">
  <?php if($total_mitra>=0){
    echo'<section id="clients" class="clients">';
    echo'<div class="container" data-aos="zoom-in">';
    echo'<div class="owl-carousel clients-carousel">';
      foreach($data_mitra as $mtr){
        echo '<div>';
        $image="$mtr[gambar]";
        $path= base_url("assets/dua/img/mitra/$image");
        echo'<img style="object-fit: contain; margin-left:30px" height="100px" src="'.$path.'" alt="">';
        echo '<p align="center" style="margin-top:10px;background-color:rgba(3, 56, 102, 0.9);;opacity:0.3;font-size:16px;font-weight:700; color:#fff; padding-left:5px">'.$mtr['institusi'].'</p>';
        echo'</div>';
      }
     echo'</div>';
     echo'</div>';
     echo'</section>';
    }
  ?>
    <!-- ======= Counts Section ======= -->
    <section class="counts">
      <div style="margin-bottom:20px" class="container-fluid justify-content-center">

        <div class="row">

          <div class="col-lg-3 text-center" data-aos="fade-up">
            <div style="border-radius:20px" class="count-box">
              <i class="icofont-group-students" style="color: #20b38e;"></i>
              <span data-toggle="counter-up">278</span>
              <p><?php echo __e('exchange_mhs'); ?></p>
            </div>
          </div>

          <div class="col-lg-3 text-center" data-aos="fade-up" data-aos-delay="200">
            <div style="border-radius:20px" class="count-box">
              <i class="icofont-teacher" style="color: #c042ff;"></i>
              <span data-toggle="counter-up">265</span>
              <p>
              <?php echo __e('exchange_dsn'); ?>
              </p>
            </div>
          </div>	

          <div class="col-lg-3 text-center" data-aos="fade-up" data-aos-delay="400">
            <div style="border-radius:20px" class="count-box">
              <i class="icofont-users-alt-5" style="color: #46d1ff;"></i>
              <span data-toggle="counter-up">84</span>
              <p>
              <?php echo __e('foreign_mhs'); ?>
              </p>
            </div>
          </div>

          <div class="col-lg-3 text-center" data-aos="fade-up" data-aos-delay="600">
            <div style="border-radius:20px" class="count-box">
              <i class="icofont-tasks" style="color: #ffb459;"></i>
              <span data-toggle="counter-up">477</span>
              <p>
              <?php echo __e('cooperation'); ?>
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

 <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">

          <div class="col-lg-5 align-items-stretch" data-aos="fade-right">
            <iframe class="text-center" width="100%" height="100%" src="https://www.youtube.com/embed/-9QlXVuoFvw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch" data-aos="fade-left">
            <div class="content">
              <h3><?php echo __e('upt'); ?><br><strong><?php echo __e('unib'); ?></strong></h3>
              <p><?php echo __e('keterangan'); ?></p>
            </div>
            <div class="accordion-list">
              <ul>
                <li data-aos="fade-up" data-aos-delay="100">
                  <a data-toggle="collapse" class="collapse" href="#accordion-list-1"><span><?php echo __e('news'); ?></span>  <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse show" data-parent=".accordion-list">
                    <p>
                    <?php echo __e('news_keterangan'); ?>  
                    </p>
                    <button onclick="window.location.href='<?=base_url('post')?>'" style="background-color:#0880e8" class="btn btn-info mt-2"><?php echo __e('more'); ?></button>
                  </div>
                </li>
                <li data-aos="fade-up" data-aos-delay="200">
                  <a data-toggle="collapse" href="#accordion-list-2" class="collapsed"><span> <?php echo __e('our_programs'); ?></span>  <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse" data-parent=".accordion-list">
                    <p>
                    <?php echo __e('programs_keterangan'); ?>  
                    </p>
                    <button onclick="window.location.href='<?=base_url('program')?>'" style="background-color:#0880e8" class="btn btn-info mt-2"><?php echo __e('more'); ?></button>
                  </div>
                </li>

                <li data-aos="fade-up" data-aos-delay="300">
                  <a data-toggle="collapse" href="#accordion-list-3" class="collapsed"><span><?php echo __e('cooperation'); ?></span> <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-3" class="collapse" data-parent=".accordion-list">
                    <p>
                    <?php echo __e('cooperation_keterangan'); ?>
                   </p>
                    <button onclick="window.location.href='<?=base_url('program/partners')?>'" style="background-color:#0880e8" class="btn btn-info mt-2"><?php echo __e('more'); ?></button>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Why Us Section -->
   <!-- ======= Team Section ======= -->
   <section id="team" class="team">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2 style="font-weight: 700;
  margin-bottom: 5px;
  font-size: 30px;
  color: #05579e;"><?php echo __e('team'); ?></h2>
        </div>
        <div class="row">
        <?php foreach($data_staf as $stf):?>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="member d-flex align-items-start">

              <div class="pic"><img style="object-fit: contain;" src="<?=base_url('assets/dua/img/staf/').$stf['foto']?>" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4><?=$stf['nama']?></h4>
                <span><?=$stf['jabatan']?></span>
                <p>NIP: <?=$stf['nip']?></p>
              </div>
            </div>
            <br>

          </div>
          <?php endforeach?>
        </div>
      </div>
    </section><!-- End Team Section -->
    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2 style="font-weight: 700;
  margin-bottom: 5px;
  font-size: 30px;
  color: #05579e;"><?php echo __e('faq'); ?></h2>
        </div>

        <div class="faq-list">
        
          <ul>
            <li data-aos="fade-up" data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" class="collapse" href="#faq-list-1">Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-parent=".faq-list">
                <p>
                  Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-2" class="collapsed">Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-parent=".faq-list">
                <p>
                  Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-3" class="collapsed">Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-parent=".faq-list">
                <p>
                  Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-4" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-parent=".faq-list">
                <p>
                  Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="500">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-5" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-parent=".faq-list">
                <p>
                  Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->
  <!-- ======= Blog Section ======= -->
  <section id="blog" class="blog">
      <div class="container">
      <h2 class="justify-content-center text-center" style=" font-weight: 700;
  margin-bottom: 5px;
  font-size: 30px;
  color: #05579e;"><?php echo __e('berita'); ?></h2>
      <br>
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
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a><time><?=date('d F Y', strtotime($berita->tgl_posting)); ?></time></a></li>
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
      </div>
    </section><!-- End Blog Section -->

    <section id="contact" class="contact">
      <div class="container section-title">
      <h2 class="justify-content-center text-center" style=" font-weight: 700;
  margin-bottom: 5px;
  font-size: 30px;
  color: #05579e;"><?php echo __e('menu_hubungi'); ?></h2>
      <br>
        <div>
          <iframe style="border:0; width: 100%; height: 270px;" src="https://maps.google.com/maps?q=UPT%20KSLI%20Universitas%20Bengkulu&t=k&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" allowfullscreen></iframe>
        </div>
        <?= $this->session->flashdata('message'); ?>

          <div class="row mt-4">
          <div style="background-color:tranparent" class="col-lg-4">
            <div style="background-color:tranparent" class="info">
              <div style="background-color:tranparent" class="address">
                <i class="icofont-google-map"></i>
                <h4><?php echo __e('lokasi'); ?>:</h4>
                <p><?php echo __e('contact_us'); ?></p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4><?php echo __e('al_email'); ?>:</h4>
                <p>international_unib@gmail.com</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4><?php echo __e('telpon'); ?>:</h4>
                <p>+1 5589 55488 55s</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">
          <h2 class="justify-content-center text-center" style=" font-weight: 700;
  margin-bottom: 5px;
  font-size: 25px;
  color: #05579e;"><?php echo __e('ask'); ?></h2>
            <form action="<?=base_url('sendconnection')?>"  method="post"  enctype="multipart/form-data">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="nama" class="form-control" required id="nama" placeholder="<?php echo __e('name'); ?>" data-rule="minlen:4" data-msg="Please fill out your name" />
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" required id="email" placeholder="<?php echo __e('al_email'); ?>" data-rule="email" data-msg="Please fill out your email" />
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="institusi" required id="institusi" placeholder="<?php echo __e('institution'); ?>" data-rule="minlen:4" data-msg="Please fill out your name" />
              </div>
              <div class="form-group">
                <textarea class="form-control" name="pesan" rows="5" required data-rule="required" placeholder="<?php echo __e('msg'); ?>"></textarea>
              </div>
              <div class="text-center"><button style="border-radius:10px;" class="btn-primary"  type="submit"><?php echo __e('send'); ?></button></div>
          </div>

        </div>
        </form>

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
  <!-- <script src="<?=base_url('assets/dua/js/js2.js')?>"></script>
  <script src="<?=base_url('assets/dua/js/js3.js')?>"></script> -->

  <script src="<?=base_url('assets/dua/js/preloader.js')?>"></script>


</body>

</html>
