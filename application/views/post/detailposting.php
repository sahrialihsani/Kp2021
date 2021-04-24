<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <script language='JavaScript'>
var txt="UPT KSLI UNIB | DETAIL POSTING ";
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
  <link href="<?=base_url('')?>assets/dua/vendor2/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?=base_url('')?>assets/dua/vendor2/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?=base_url('')?>assets/dua/vendor2/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?=base_url('')?>assets/dua/vendor2/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?=base_url('')?>assets/dua/vendor2/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?=base_url('')?>assets/dua/vendor2/venobox/venobox.css" rel="stylesheet">
  <link href="<?= base_url('')?>assets/dua/vendor2/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?=base_url('')?>assets/dua/css/footer.css" rel="stylesheet">
  <link href="<?=base_url('')?>assets/dua/css/style.css" rel="stylesheet">
  <link href="<?=base_url('')?>assets/dua/css/preloader.css" rel="stylesheet">
<link href="<?=base_url('assets/dua/css/footer.css')?>" rel="stylesheet">



  <!-- =======================================================
  * Template Name: Anyar - v2.2.1
  * Template URL: https://bootstrapmade.com/anyar-free-multipurpose-one-page-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<body>
  <main id="main">
  <br>
    <br>
    <br>
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="<?=base_url('')?>">Beranda</a></li>
          <li><a href="<?=base_url('Post')?>">Berita</a></li>
        </ol>
        <?php foreach($detail_post as $post): ?>
        <h2><?=$post->judul?></h2>
        <?php endforeach;?>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container">

        <div class="row">

          <div class="col-lg-8 entries">
          <?php foreach($detail_post as $post): ?>

            <article class="entry entry-single">

              <div class="entry-img">
                <img src="<?=base_url('assets/dua/img/berita/').$post->gambar?>" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a><?=$post->judul?></a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a>Admin KSLI</a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a><?=date('d F Y', strtotime($post->tgl_posting)); ?></a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                <?=auto_typography($post->isi)?>
                </p>

              </div>
              <?php endforeach;?>

              <div class="entry-footer clearfix">
              <div class="float-left">
                  <ul class="tags">
                     <?php foreach($detail_post as $post): ?>
                    <li><a href="#"><?=$post->kategori?></a></li>
                     <?php endforeach;?>
                     
                  </ul>
                </div>
                <div class="float-right share">
                  <a href="" title="Share on Twitter"><i class="icofont-twitter"></i></a>
                  <a href="" title="Share on Facebook"><i class="icofont-facebook"></i></a>
                  <a href="" title="Share on Instagram"><i class="icofont-instagram"></i></a>
                </div>

              </div>

            </article><!-- End blog entry -->

          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            <div class="sidebar">

              <h3 class="sidebar-title">Categories</h3>
              <div class="sidebar-item categories">
                <ul>
                <?php foreach($data_kategori as $ktg): ?>

                  <li><a href="#"><?=$ktg->kategori?> </a></li>
              <?php endforeach;?>

                </ul>

              </div><!-- End sidebar categories-->

              <h3 class="sidebar-title">Recent Posts</h3>
              <div class="sidebar-item recent-posts">
              <?php foreach($data_berita_terbaru as $pbaru): ?>
                <div class="post-item clearfix">
                  <img src="<?=base_url('assets/dua/img/berita/').$pbaru->gambar?>" alt="">
                  <h4><a href="<?=base_url('post/detailberita/').$pbaru->id?>"><?=$pbaru->judul?></a></h4>
                  <time datetime="2020-01-01"><?=date('d F Y', strtotime($post->tgl_posting)); ?></time>
                </div>
              <?php endforeach;?>

              </div><!-- End sidebar recent posts-->
            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Section -->
    <div id="preloader"></div>
</main>
  <script src="<?=base_url('')?>assets/dua/vendor2/jquery/jquery.min.js"></script>
  <script src="<?=base_url('')?>assets/dua/vendor2/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?=base_url('')?>assets/dua/vendor2/jquery.easing/jquery.easing.min.js"></script>
  <script src="<?=base_url('')?>assets/dua/vendor2/php-email-form/validate.js"></script>
  <script src="<?=base_url('')?>assets/dua/vendor2/owl.carousel/owl.carousel.min.js"></script>
  <script src="<?=base_url('')?>assets/dua/vendor2/venobox/venobox.min.js"></script>
  <script src="<?=base_url('')?>assets/dua/vendor2/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?=base_url('')?>assets/dua/vendor2/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="<?=base_url('assets/dua/js/main.js')?>"></script>
  <script src="<?=base_url('assets/dua/js/js2.js')?>"></script>
  <script src="<?=base_url('assets/dua/js/js3.js')?>"></script>
  <script src="<?=base_url('assets/dua/js/preloader.js')?>"></script>
</body>
</html>