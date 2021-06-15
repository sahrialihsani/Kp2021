<!DOCTYPE html>
<html lang="en">
<link href="<?=base_url('assets/dua/css/footer.css')?>" rel="stylesheet">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <script language='JavaScript'>
var txt="UPT KSLI UNIB | COOPERATION ";
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
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
<section style="background-color:#fff;" id="oportunity" class="oportunity">
      <div class="container section-title">
      <br>
      <br>
      <br>
      <br>
      <?= $this->session->flashdata('message'); ?>
      <canvas style="margin-top:5px" width="9%" height="4%"  id="myChart"></canvas>
        <?php
    //Inisialisasi nilai variabel awal
    $nama_negara= "";
    $jumlah=0;
    foreach ($hasil as $item)
    {
        $neg=$item->name;
        $nama_negara .= "'$neg'". ", ";
        $jum=$item->total;
        $jumlah .= "$jum". ", ";
    }
    ?>
    <script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'bar',
        // The data for our dataset
        data: {
            labels: [<?php echo $nama_negara; ?>],
            datasets: [{
                label:'Negara Asal Mitra Universitas Bengkulu',
                backgroundColor: ['rgb(255, 99, 132)', 'rgba(56, 86, 255, 0.87)', 'rgb(60, 179, 113)','rgb(175, 238, 239)'],
                borderColor: ['rgb(255, 99, 132)'],
                data: [<?php echo $jumlah; ?>]
            }]
        },
        // Configuration options go here
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
</script>
      <h2 class="justify-content-center text-center" style=" font-weight: 700;
  font-size: 30px;
  color: #05579e;">Daftar Menjadi Mitra</h2>
      <br>
          <div class="justify-content-center">

          <form action="<?=base_url('daftarmitra/daftar')?>"  method="post"  enctype="multipart/form-data">
              <div class="form-group">
                <input type="text" class="form-control" name="institusi" required id="institusi" placeholder="Your Institution"/>
              </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" required id="email" placeholder="Your Institution Email"/>
                </div>
              <div class="form-group">
                <p class="float-left">Your Country</p>

                <select name="negara" required class="form-control">
                <option selected="true" disabled="disabled">Choose your Country</option>

                <?php $result= mysqli_query("Select")?>
            <?php 
            $result = $this->db->query("SELECT * FROM tb_negara")->result();
            foreach($result  as $rsl) : ?>
                <option value="<?php echo $rsl->id ?>"><?php echo $rsl->name?></option>
                <?php endforeach; ?>
                </select>
                </div>
              <div class="form-group">
                <textarea class="form-control" name="pesan" rows="5" required placeholder="Your Message"></textarea>
              </div>
              <div class="form-group">
                <p class="float-left">Insert your institution logo </p>
                <input type="file" class="form-control" name="gambar" required id="gambar" />
              </div>
              <div class="form-group">
                <p class="float-left">Insert your cooperation file</p>
                <input type="file" class="form-control" name="berkas" required id="berkas" />
              </div>
              <div class="text-center"><button style="border-radius:10px;" class="btn-primary" type="submit">Send Connection</button></div>
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