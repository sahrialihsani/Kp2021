<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <script language='JavaScript'>
var txt="UPT KSLI UNIB | KERJASAMA UNIVERSITAS ";
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
  
</head>

<body style="background-color:rgba(3, 56, 102, 0.9);">
<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">
<?= $this->session->flashdata('message'); ?>

      <button onclick="window.location.href='<?=base_url('admin/pangkalandata')?>'" style="border-radius:10px; margin-bottom:10px" class="btn btn-primary"><i class="icofont-arrow-left"></i> Kembali</button>

    <h2 class="justify-content-center text-center" style=" font-weight: 700;
  margin-bottom: 20px;
  font-size: 30px;
  color: #fff;">Kerjasama dengan Universitas</h2>
<button onclick="window.location.href='<?=base_url('cetak/cetakuniv')?>'" class="btn btn-sm btn-primary float-left ml-2"><i class="icofont-print"></i>Cetak Data</button>

<button class="btn btn-sm btn-primary float-left ml-2" data-toggle="modal" data-target="#tambah_universitas">Tambah Data Kerjasama</button>
        <br>
        <br>
          <div style="margin-bottom:20px" class="container-fluid justify-content-center">
          
          <!-- <button onclick="window.location.href='<?=base_url('#')?>'" style="border-radius:10px; margin-bottom:10px" class="btn btn-primary"><i class="icofont-print"></i> Cetak Data</button> -->
               
          <table id="example" class="table table-responsive table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Mitra</th>
                    <th>Nama Kerjasama</th>
                    <th>Status Kerjasama</th>
                    <th>Berkas</th>
                    <th>Tanggal Mulai</th>
                    <th>Tanggal Berakhir</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                  <?php
                  $no = 1;
                  foreach ($data_universitas as $unv) { ?>
                    <tr>
            <td><?=$no++ ?></td>
            <td><?=$unv->institusi; ?></td>
            <td><?=$unv->nama_kerjasama; ?></td>
            <td><?=$unv->status; ?></td>
            <td><a style="color:#fc9b3f" href="<?=base_url('admin/pangkalandata/detailBerkasUniv/').$unv->id?>"><?=$unv->file?></a></td>
            <td><?=date('d F Y', strtotime($unv->tgl_mulai)); ?></td> 
      <td><?php echo date('d F Y', strtotime($unv->tgl_akhir)); ?></td>  
                      <td>
                        <div  class="btn-group">
                        <button type="button" class="btn btn-warning btn-flat btn-xs">Aksi</button>
                          <button type="button" class="btn btn-warning btn-xs btn-flat dropdown-toggle" data-toggle="dropdown">
                            <span class="caret"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                          </button>
                          <ul style="background-color:#fff" class="dropdown-menu" role="menu">
                            <li><a style="padding-left:5px;padding-bottom:3px;padding-top:3px;color:#000" href="<?= base_url('admin/pangkalandata/editUniversitas/') . $unv->id; ?>"> <i class="icofont-ui-edit">Edit Data</i></a></li>
                            <li><a style="padding-left:5px;padding-bottom:3px;padding-top:3px;color:#000" href="<?= base_url('admin/pangkalandata/hapusUniversitas/') . $unv->id; ?>" onclick="return confirm('Apakah yakin data ini di hapus?')"><i class="icofont-ui-delete">Hapus Data</i></a></li>
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
     </div>
     <div class="modal fade" id="tambah_universitas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div   class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
             <h5 style="color:#3f80ba" class="modal-title" id="exampleModalLabel">Input data kerjasama dengan Universitas</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div style="background-color:#3f80ba" class="modal-body">
          <form action="<?= base_url('admin/pangkalandata/tambahUniversitas');?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label >Nama Mitra</label>
              <select name="nama" class="form-control" required>
              <option selected="true" disabled="disabled">Pilih Mitra</option>

                <?php $result= mysqli_query("Select")?>
            <?php 
            $result = $this->db->query("SELECT * FROM tb_mitra")->result();
            foreach($result  as $rsl) : ?>
                <option value="<?php echo $rsl->id ?>"><?php echo $rsl->institusi?></option>
                <?php endforeach; ?>
                </select>
                <div class="form-group">
              <label >Nama Kerjasama</label>
              <input style="color:#ffffff;" type="text" name="nama_kerjasama" class="form-control" required>
                <?= form_error('nama_kerjasama','<small class="text-danger pl-3">','</small>')  ?>
                <div class="form-group">
              <label >Isi Kerjasama</label>
              <textarea style="color:#ffffff;" type="text" name="isi" class="form-control" required></textarea>
                <?= form_error('isi','<small class="text-danger pl-3">','</small>')  ?>
                <div class="form-group">
         <label>Berkas</label>
         <input style="color:#ffffff;" type="file" name="file" class="form-control" required>
            <?= form_error('berkas','<small class="text-danger pl-3">','</small>')  ?>
    
              <label >Tanggal Mulai</label>
              <input style="color:#ffffff;" type="date" name="tgl_mulai" class="form-control" required>
                <?= form_error('tgl_mulai','<small class="text-danger pl-3">','</small>')  ?>
                <div class="form-group">
              <label >Tanggal Berakhir</label>
              <input style="color:#ffffff;" type="date" name="tgl_akhir" class="form-control" required>
                <?= form_error('tgl_akhir','<small class="text-danger pl-3">','</small>')  ?>
          
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