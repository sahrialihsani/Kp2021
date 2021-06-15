<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <script language='JavaScript'>
var txt="UPT KSLI UNIB | MITRA KERJASAMA ";
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
  <link href="<?=base_url('assets/data/css/image.css')?>" rel="stylesheet"/>

  <link href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css" rel="stylesheet">

  <link href="<?= base_url('')?>assets/dua/vendor/icofont/icofont.min.css" rel="stylesheet">
  
</head>

<body style="background-color:rgba(3, 56, 102, 0.9);">
<div class="clearfix"></div>

  <div class="content-wrapper">
    <div class="container-fluid">
<?= $this->session->flashdata('message'); ?>
<?= $this->session->flashdata('email_sent'); ?>
    <h2 class="justify-content-center text-center" style=" font-weight: 700;
  margin-bottom: 20px;
  font-size: 30px;
  color: #fff;">Mitra Kerjasama</h2>
    <div class="page-breadcrumb">

<div class="container-fluid">

  <!-- <form method="post" action="<?php echo base_url('administrator/pindah_keluar/input_aksi')?>"> -->

    <hr>
    <br>
    <?php echo form_open_multipart('admin/mitra/tambahMitra'); ?>

    <div class="form-group">
      <label>Email</label>
      <input type="email" name="email" placeholder="Masukkan Email" class="form-control" required>
    </div>

    <br>

    <div class="form-row">
        <div class="form-group col-md-6" >
          <label>Intutsi</label>
            <input type="text" name="institusi" placeholder="Masukkan Instusi" class="form-control" maxlength="50" required>

        </div>

        <div class="form-group col-md-6" >
          <label>Nama Negara</label>
          <select name="negara" class="form-control" required oninvalid="this.setCustomValidity('Silahkan Pilih Negara Asal Anda')" oninput="setCustomValidity('')">
                                    <option value="" selected disabled>-- Pilih Negara --</option>
                                    <?php 
                                    $negara = $this->db->query("Select * from tb_negara")->result();
                                    foreach($negara as $js) : ?>
                                        <option value="<?php echo $js->id ?>"><?php echo $js->nicename;?></option>
                                        <?php endforeach; ?>
                                    </select>     
        </div>
      </div>


      <div class="form-group">
      <label>Pesan</label>
      <input type="text" name="pesan" placeholder="Masukkan Pesan" class="form-control" rows="3" required>
    </div>

    
      </div>

   
      <div class="form-group">
        <div class="form-group col-md-6" >
          <label>Gambar Mitra</label>
              
                
                      <input style="color:#000;" type="file" name="gambar" class="form-control">

              </div>
      </div>

      <div class="form-group col-md-6" >
        <label>Berkas Mitra</label>

                <input style="color:#000;" type="file" name="berkas" class="form-control">

                </div>
        
    </div>



  </div>

  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" class="btn btn-success"> Simpan </button> &nbsp;&nbsp;&nbsp;&nbsp;

    <br><br>
<!--  </form> -->

<?php echo form_close(); ?>

<br>
    <br>
    <br>

      <div style="margin-bottom:20px" class="container-fluid justify-content-center">
      
      <!-- <button onclick="window.location.href='<?=base_url('#')?>'" style="border-radius:10px; margin-bottom:10px" class="btn btn-primary"><i class="icofont-print"></i> Cetak Data</button> -->
           
      
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