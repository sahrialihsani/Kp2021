<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <script language='JavaScript'>
var txt="UPT KSLI UNIB | KERJASAMA ";
var speed=300;
var refresh=null;
function action() { document.title=txt;
txt=txt.substring(1,txt.length)+txt.charAt(0);
refresh=setTimeout("action()",speed);}action();
</script>
  <!-- loader-->
  <link href="<?=base_url('')?>assets/data/css/pace.min.css" rel="stylesheet"/>
  <script src="<?=base_url('')?>assets/data/js/pace.min.js"></script>
  <!--favicon-->
  <link rel="icon" href="<?=base_url('')?>assets/data/images/favicon.ico" type="image/x-icon">
  <!-- Vector CSS -->
  <link href="<?=base_url('')?>assets/data/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
  <!-- simplebar CSS-->
  <link href="<?=base_url('')?>assets/data/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="<?=base_url('')?>assets/data/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="<?=base_url('')?>assets/data/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="<?=base_url('')?>assets/data/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="<?=base_url('')?>assets/data/css/sidebar-menu.css" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="<?=base_url('')?>assets/data/css/app-style.css" rel="stylesheet"/>
  <link href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css" rel="stylesheet">
  <link href="<?= base_url('')?>assets/dua/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?=base_url('')?>assets/dua/css/counts.css" rel="stylesheet"/>

  
</head>

<body style="background-color:rgba(3, 56, 102, 0.9);">
<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">
    <?= $this->session->flashdata('message'); ?>

    <section class="counts">
<h2 class="justify-content-center text-center" style=" font-weight: 700;
  font-size: 30px;
  color: #fff;">Pangkalan Data Kerjasama</h2>
      <div style="margin-bottom:20px" class="container-fluid justify-content-center">

        <div class="row">

          <div class="col-lg-4 col- text-center" data-aos="fade-up">
            <div style="border-radius:20px; border-style:solid; border-color:#054a85; background-color:#f0faff" class="count-box">
            <i class="icofont-university" style="color: #91daff;"></i>
              <span data-toggle="counter-up"><?php echo $total_universitas;?></span>
              <p style="color:#000">Perguruan Tinggi</p>
        <button onclick="window.location.href='<?=base_url('admin/pangkalandata/universitas')?>'" style="border-radius:10px;margin-top:10px" class="btn btn-primary">Lihat Data</button>

            </div>

          </div>

          <div class="col-lg-4 text-center" data-aos="fade-up" data-aos-delay="200">
          <div style="border-radius:20px; border-style:solid; border-color:#054a85; background-color:#f0faff" class="count-box">
          <i class="icofont-institution" style="color: #91daff;"></i>

              <span data-toggle="counter-up"><?php echo $total_pemerintahan;?></span>
              <p style="color:#000">Instansi Pemerintahan</p>
              <button onclick="window.location.href='<?=base_url('admin/pangkalandata/pemerintahan')?>'" style="border-radius:10px;margin-top:10px" class="btn btn-primary">Lihat Data</button>

            </div>

          </div>

          <div class="col-lg-4 text-center" data-aos="fade-up" data-aos-delay="400">
          <div style="border-radius:20px; border-style:solid; border-color:#054a85; background-color:#f0faff" class="count-box">
          <i class="icofont-building" style="color: #91daff;"></i>

              <span data-toggle="counter-up"><?php echo $total_swasta;?></span>
              <p style="color:#000">Perusahaan/Swasta</p>
              <button onclick="window.location.href='<?=base_url('admin/pangkalandata/swasta')?>'" style="border-radius:10px;margin-top:10px" class="btn btn-primary">Lihat Data</button>

            </div>

          </div>
        </div>
      </div>
    </section><!-- End Counts Section -->
      </div>
	</div>
 </div>

</body>
<script src="<?=base_url('')?>assets/data/js/jquery.min.js"></script>
  <script src="<?=base_url('')?>assets/data/js/popper.min.js"></script>
  <script src="<?=base_url('')?>assets/data/js/bootstrap.min.js"></script>
	
 <!-- simplebar js -->
  <script src="<?=base_url('')?>assets/data/plugins/simplebar/js/simplebar.js"></script>
  <!-- sidebar-menu js -->
  <script src="<?=base_url('')?>assets/data/js/sidebar-menu.js"></script>
  <!-- loader scripts -->
  <script src="<?=base_url('')?>assets/data/js/jquery.loading-indicator.js"></script>
  <!-- Custom scripts -->
  <script src="<?=base_url('')?>assets/data/js/app-script.js"></script>
  <!-- Chart js -->
  
  <script src="<?=base_url('')?>assets/data/plugins/Chart.js/Chart.min.js"></script>
  <script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
  <!-- Index js -->
  <script src="<?=base_url('')?>assets/data/js/index.js"></script>
  <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>


</html>