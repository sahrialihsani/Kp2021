<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <script language='JavaScript'>
var txt="UPT KSLI UNIB | STAF ";
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
  <link href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css" rel="stylesheet">
  <link href="<?= base_url('')?>assets/dua/vendor/icofont/icofont.min.css" rel="stylesheet">

  
</head>

<body style="background-color:rgba(3, 56, 102, 0.9);">
<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">
    <?= $this->session->flashdata('message'); ?>
        
        <h2 class="justify-content-center text-center" style=" font-weight: 700;
      margin-bottom: 20px;
      font-size: 30px;
      color: #fff;">Staff UPT KSLI</h2>
        <button class="btn btn-sm btn-primary float-left ml-2" data-toggle="modal" data-target="#tambah_staf">Tambah Staf</button>
        <br>
        <br>
    
          <div style="margin-bottom:20px" class="container-fluid justify-content-center">
          
          <!-- <button onclick="window.location.href='<?=base_url('#')?>'" style="border-radius:10px; margin-bottom:10px" class="btn btn-primary"><i class="icofont-print"></i> Cetak Data</button> -->
               
          <table id="example" class="table table-responsive table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                  <?php
                  $no = 1;
                  foreach ($data_staf as $stf) { ?>
                    <tr>
            <td><?=$no++ ?></td>
            <td><?=$stf->nip; ?></td>
            <td><?=$stf->nama; ?></td>  
            <td><?=$stf->jabatan; ?></td>   
            <td align="center"> <img style="object-fit: contain;" src="<?php echo base_url('assets/dua/img/staf/'.$stf->foto)?>" width="400px" height="200"></td>
                      <td>
                        <div  class="btn-group">
                        <button type="button" class="btn btn-warning btn-flat btn-xs">Aksi</button>
                          <button type="button" class="btn btn-warning btn-xs btn-flat dropdown-toggle" data-toggle="dropdown">
                            <span class="caret"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                          </button>
                          <ul style="background-color:#fff" class="dropdown-menu text-center" role="menu">
                            <li><a style="padding-left:5px;padding-bottom:3px;padding-top:3px;color:#000" href="<?= base_url('admin/staf/editStaf/') . $stf->id; ?>"><i class="icofont-ui-edit">Edit Data</i></a></li>
                            <li><a style="padding-left:5px;padding-bottom:3px;padding-top:3px;color:#000" href="<?= base_url('admin/staf/hapusStaf/') . $stf->id; ?>" onclick="return confirm('Apakah yakin data staf ini di hapus?')"><i class="icofont-ui-delete">Hapus Data</i></a></li>
                         
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
     <div class="modal fade" id="tambah_staf" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div   class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
             <h5 style="color:#3f80ba" class="modal-title" id="exampleModalLabel">Input data staf</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div style="background-color:#3f80ba" class="modal-body">
          <form action="<?= base_url('admin/staf/tambahStaf');?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label >Nip</label>
              <input style="color:#ffffff;" type="number" name="nip" class="form-control" required>
                <?= form_error('nip','<small class="text-danger pl-3">','</small>')  ?>
             <div class="form-group">
              <label> Nama</label>
              <input style="color:#ffffff;" type="text" name="nama" class="form-control" required>
                <?= form_error('nama','<small class="text-danger pl-3">','</small>')  ?>
                <div class="form-group">
              <label> Jabatan</label>
              <input style="color:#ffffff;" type="text" name="jabatan" class="form-control" required>
                <?= form_error('jabatan','<small class="text-danger pl-3">','</small>')  ?>
            <div class="form-group">
         <label>Foto</label>
         <input style="color:#ffffff;" type="file" name="foto" class="form-control" required>
            <?= form_error('foto','<small class="text-danger pl-3">','</small>')  ?>
    
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