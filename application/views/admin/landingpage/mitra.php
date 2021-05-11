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
    <button class="btn btn-sm btn-primary float-left ml-2" data-toggle="modal" data-target="#tambah_mitra">Tambah Mitra</button>
    <br>
    <br>

      <div style="margin-bottom:20px" class="container-fluid justify-content-center">
      
      <!-- <button onclick="window.location.href='<?=base_url('#')?>'" style="border-radius:10px; margin-bottom:10px" class="btn btn-primary"><i class="icofont-print"></i> Cetak Data</button> -->
           
      <table id="example" class="table table-responsive table-striped table-flush table-borderless" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Email</th>
                <th>Nama Mitra</th>
                <th>Asal</th>
                <th>Pesan</th>
                <th>Status</th>
                <th>Gambar</th>
                <th>Berkas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
              <?php
              $no = 1;
              foreach ($data_mitra as $mtra) { ?>
                <tr>
        <td><?=$no++ ?></td>
        <td><?=$mtra->email; ?></td>   
        <td><?=$mtra->institusi; ?></td>  
        <td><?=$mtra->name; ?></td> 
        <td><?php echo wordwrap(word_limiter("$mtra->pesan",30),50,"<br>\n");?></td>   
        <td><?=$mtra->status; ?></td>   
        <td align="center">
        <img style="object-fit: cover;" src="<?php echo base_url('assets/dua/img/mitra/'.$mtra->gambar)?> " width="200px" height="150px">
        <td><a style="color:#fc9b3f" href="<?=base_url('admin/mitra/detailBerkas/').$mtra->id?>"><?=$mtra->berkas?></a></td>   
          
          </td>
                  <td>
                    <div  class="btn-group">
                    <button type="button" class="btn btn-warning btn-flat btn-xs">Aksi</button>
                      <button type="button" class="btn btn-warning btn-xs btn-flat dropdown-toggle" data-toggle="dropdown">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                      </button>
                      <ul style="background-color:#fff" class="dropdown-menu text-center" role="menu">
                      <?php
                      if($mtra->status == "Diterima"){
                        echo anchor('admin/mitra/hapusMitra/'.$mtra->id,'<div class="btn btn-danger btn-sm"><i class="icofont-ui-delete">Hapus Mitra</i></div>');
                      
                              }
                      else if($mtra->status == "Menunggu"){
                        echo anchor('admin/mitra/terima/'.$mtra->id,'<div class="btn btn-success btn-sm"><i class="icofont-check">Terima</i></div>');
                        echo '<br>';
                        echo anchor('admin/mitra/tolak/'.$mtra->id,'<div style="margin-top:5px" class="btn btn-danger btn-sm"><i class="icofont-close">Tolak</i></div>');
                        echo '<br>';
                        echo anchor('admin/mitra/editMitra/'.$mtra->id,'<div style="margin-top:5px" class="btn btn-warning btn-sm"><i class="icofont-ui-edit">Edit Mitra</i></div>');
                        echo '<br>';
                        echo anchor('admin/mitra/hapusMitra/'.$mtra->id,'<div style="margin-top:5px" class="btn btn-danger btn-sm"><i class="icofont-ui-delete">Hapus Mitra</i></div>');
                              
                                      }
                        ?>
                        </ul> 
                    </div>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
    </table>
      
      </div>
 
	</div>
 </div>
 <div class="modal fade" id="tambah_mitra" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div   class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
         <h5 style="color:#3f80ba" class="modal-title" id="exampleModalLabel">Input Data Mitra</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div style="background-color:#3f80ba" class="modal-body">
      <form action="<?= base_url('admin/mitra/tambahMitra');?>" method="post" enctype="multipart/form-data">
         <div class="form-group">
          <label> Email</label>
          <input style="color:#ffffff;" type="email" name="email" class="form-control" required >
            <?= form_error('email','<small class="text-danger pl-3">','</small>')  ?>
        <div class="form-group">
     <label>Institusi</label>
     <input style="color:#ffffff;" type="text" name="institusi" class="form-control" required>
        <?= form_error('institusi','<small class="text-danger pl-3">','</small>')  ?>
        <div class="form-group">
          <label>Negara</label>
                <select name="negara" required class="form-control">
                <option selected="true" disabled="disabled">Pilih Negara Asal</option>
                <?php $result= mysqli_query("Select")?>
            <?php 
            $result = $this->db->query("SELECT * FROM tb_negara")->result();
            foreach($result  as $rsl) : ?>
                <option value="<?php echo $rsl->id ?>">(<?php echo $rsl->iso?>) <?php echo $rsl->name?></option>
                <?php endforeach; ?>
                </select>
     <div class="form-group">
          <label> Pesan</label>
          <textarea style="color:#000;" type="text" name="pesan" class="form-control" ></textarea>
          <?= form_error('pesan','<small class="text-danger pl-3">','</small>')  ?>
    <div class="form-group">
          <label> Gambar</label>
          <input style="color:#000;" type="file" name="gambar" class="form-control">
           <?= form_error('gambar','<small class="text-danger pl-3">','</small>')  ?>
    <div class="form-group">
          <label> File</label>
          <input style="color:#000;" type="file" name="berkas" class="form-control">
           <?= form_error('berkas','<small class="text-danger pl-3">','</small>')  ?>
              </div>
          </div>
        </div>
        </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Keluar</button>
        <button  type="submit" class="btn btn-primary">Simpan perubahan</button>
      </div>
      </form>
      </div>
        </div>
        </div>
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