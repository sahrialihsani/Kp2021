<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <script language='JavaScript'>
var txt="UPT KSLI UNIB | EDIT PROFIL ";
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
  <link href="<?= base_url('')?>assets/dua/vendor/icofont/icofont.min.css" rel="stylesheet">
  
</head>

<body style="background-color:rgba(3, 56, 102, 0.9);">
<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">

  <!--Start Dashboard Content-->
  <section style="background-color:transparent">
  <button onclick="window.location.href='<?=base_url('admin/profil')?>'" style="border-radius:10px; margin-bottom:10px" class="btn btn-primary"><i class="icofont-arrow-left"></i> Kembali</button>

      <h3 class="text-center">Ubah Profil</h3>
      <div class="container" style="padding-right:100px;padding-left:50px">

        <div class="row">  
          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
            <form action="<?= base_url('admin/profil/ubah_profil');?>" method="post" enctype="multipart/form-data" role="form" >
              <div class="form-group">
                <input type="text" class="form-control" name="email" minlength="3" readonly id="email"  value="<?=$profile['email']?>"/>
                <?= form_error('email','<small class="text-danger pl-3">','</small>')  ?>
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input class="form-control" name="nama"  minlength="5"  id="nama" required value="<?=$profile['nama']?>"></input>
               <?= form_error('nama','<small class="text-danger pl-3">','</small>')  ?>
              </div>
             <div class="form-group">
     <img style="object-fit: contain;" src="<?php echo base_url('assets/dua/img/profil/'.$profile['foto'])?> " width="300" height="200">
       
     </div>
               <div class="form-group">
                <input type="file" class="form-control" name="foto"  required id="foto" value="<?=$profile['foto']?>" />
                <?= form_error('foto','<small class="text-danger pl-3">','</small>')  ?>
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="password" class="form-control" name="password"  required id="password" value="<?=$profile['password']?>" />
                <?= form_error('password','<small class="text-danger pl-3">','</small>')  ?>
                <div class="validate"></div>
              </div>
              <div  class="text-center"><button class="btn buttonBiru" style="color:#fff" type="submit">Simpan Data</button></div>
            <style>.buttonBiru{
              background-color:#17a2b8;
            }</style>
            </form>
          </div>
        </div>
      </div>
      
    </section><!-- End Frequently Asked Questions Section -->
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
  <script src="<?=base_url('')?>assets/data/js/app-script.js"></script>
  <!-- Chart js -->
  
  <script src="<?=base_url('')?>assets/data/plugins/Chart.js/Chart.min.js"></script>
 
  <!-- Index js -->
  <script src="<?=base_url('')?>assets/data/js/index.js"></script>

</html>