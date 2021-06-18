<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <script language='JavaScript'>
var txt="UPT KSLI UNIB | KERJASAMA PEMERINTAHAN ";
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

<button onclick="window.location.href='<?=base_url('admin/pangkalandata')?>'" style="border-radius:10px; margin-bottom:10px" class="btn btn-primary"><i class="icofont-arrow-left"></i> Kembali</button>

<h2 class="justify-content-center text-center" style=" font-weight: 700;
margin-bottom: 20px;
font-size: 30px;
color: #fff;">Kerja Sama dengan Pemerintahan</h2>
<button onclick="window.location.href='<?=base_url('cetak/cetakpemerintahan')?>'" class="btn btn-sm btn-primary float-left ml-2"><i class="icofont-print"></i>Cetak Data</button>
  <br>
  <br>
    <div style="margin-bottom:20px" class="container-fluid justify-content-center">
    
    <!-- <button onclick="window.location.href='<?=base_url('#')?>'" style="border-radius:10px; margin-bottom:10px" class="btn btn-primary"><i class="icofont-print"></i> Cetak Data</button> -->
         
    <table id="example" class="table table-responsive table-striped table-flush table-borderless" style="width:100%">
      <thead>
          <tr>
              <th>No</th>
              <th>Nama Mitra</th>
              <th>Nama Kerja Sama</th>
              <th>MOU/PKS</th>
              <th>Berkas</th>
              <th>Tanggal Mulai</th>
              <th>Tanggal Berakhir</th>
              <th>Aksi</th>
          </tr>
      </thead>
      <tbody>
            <?php
            $no = 1;
            foreach ($data_pemerintahan as $pmr) { ?>
              <tr>
      <td><?=$no++ ?></td>
      <td><?=$pmr->institusi; ?></td>
      <td><?=$pmr->nama_kerjasama; ?></td>
      <td><?=$pmr->mou_or_pks; ?></td>
      <td><a style="color:#fc9b3f" href="<?=base_url('admin/pangkalandata/detailBerkasGov/').$pmr->id?>"><?=$pmr->file?></a></td>
      <td><?=date('d F Y', strtotime($pmr->tgl_mulai)); ?></td> 
      <td><?=date('d F Y', strtotime($pmr->tgl_akhir)); ?></td>  
                <td>
                  <div  class="btn-group">
                  <button type="button" class="btn btn-warning btn-flat btn-xs">Aksi</button>
                    <button type="button" class="btn btn-warning btn-xs btn-flat dropdown-toggle" data-toggle="dropdown">
                      <span class="caret"></span>
                      <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <ul style="background-color:#fff" class="dropdown-menu" role="menu">
                      <li><a style="padding-left:5px;padding-bottom:3px;padding-top:3px;color:#000" href="<?= base_url('admin/pangkalandata/editPemerintahan/') . $pmr->id; ?>"> <i class="icofont-ui-edit">Edit Data</i></a></li>
                      <li><a style="padding-left:5px;padding-bottom:3px;padding-top:3px;color:#000" href="<?= base_url('admin/pangkalandata/hapusPemerintahan/') . $pmr->id; ?>" onclick="return confirm('Apakah yakin data ini di hapus?')"><i class="icofont-ui-delete">Hapus Data</i></a></li>
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
    $('#example').DataTable( {
    } );
} );

</script>
  <!-- Index js -->
  <script src="<?=base_url('')?>assets/data/js/index.js"></script>
  <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
</html>