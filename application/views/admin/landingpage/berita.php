<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <script language='JavaScript'>
var txt="UPT KSLI UNIB | BERITA ";
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
  <link href="<?= base_url('')?>assets/dua/vendor/icofont/icofont.min.css" rel="stylesheet">

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

  
</head>

<body style="background-color:rgba(3, 56, 102, 0.9);">
<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">
<?= $this->session->flashdata('message'); ?>

    <h2 class="justify-content-center text-center" style=" font-weight: 700;
  margin-bottom: 20px;
  font-size: 30px;
  color: #fff;">Berita</h2>
  
      <div style="margin-bottom:20px" class="container-fluid justify-content-center">
      <button style="border-radius:10px; margin-bottom:10px;margin-right:5px" class="btn btn-primary float-left " data-toggle="modal" data-target="#tambah_berita">Tambah Berita</button>
      <button onclick="window.location.href='<?=base_url('admin/berita/kategori')?>'" style="border-radius:10px; margin-bottom:10px" class="btn btn-primary"><i class="icofont-newspaper"></i> Kategori Berita</button>
           
      <table id="example" class="table table-responsive justify-content-center table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Isi</th>
                <th>Kategori</th>
                <th>Gambar</th>
                <th>Tanggal Postingan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
              <?php
              $no = 1;
              foreach ($data_berita as $brta) { ?>
                <tr>
        <td><?=$no++ ?></td>
        <td><?=$brta->judul; ?></td>
        <td><?php echo wordwrap(word_limiter("$brta->isi",30),50,"<br>\n");?></td>
        <td><?=$brta->kategori; ?></td>   
        <td align="center"> <img src="<?php echo base_url('assets/dua/img/berita/'.$brta->gambar)?> " width="200px" height="100px"></td>
        <td><?=date('d F Y', strtotime($brta->tgl_posting)); ?></td> 
                  <td>
                    <div  class="btn-group">
                    <button type="button" class="btn btn-warning btn-flat btn-xs">Aksi</button>
                      <button type="button" class="btn btn-warning btn-xs btn-flat dropdown-toggle" data-toggle="dropdown">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                      </button>
                      <ul style="background-color:#fff" class="dropdown-menu" role="menu">
                        <li><a style="padding-left:5px;padding-bottom:3px;padding-top:3px;color:#000" href="<?= base_url('admin/berita/editBerita/') . $brta->id; ?>"> Edit Data</a></li>
                        <li><a style="padding-left:5px;padding-bottom:3px;padding-top:3px;color:#000" href="<?= base_url('admin/berita/hapusBerita/') . $brta->id; ?>" onclick="return confirm('Apakah yakin data berita ini di hapus?')">Hapus Data</a></li>
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
 <div class="modal fade" id="tambah_berita" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div   class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
         <h5 style="color:#3f80ba" class="modal-title" id="exampleModalLabel">Input Data Berita</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div style="background-color:#3f80ba" class="modal-body">
      <form action="<?= base_url('admin/berita/tambahBerita');?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label >Judul</label>
          <input style="color:#ffffff;" type="text" name="judul" required class="form-control">
            <?= form_error('judul','<small class="text-danger pl-3">','</small>')  ?>
            <div class="form-group">
          <label >Isi</label>
          <textarea style="color:#ffffff;" type="text" required name="isi" class="form-control"></textarea>
            <?= form_error('isi','<small class="text-danger pl-3">','</small>')  ?>
         <div class="form-group">
          <label>Kategori</label>
                <select name="kategori" required class="form-control">
                <option selected="true" disabled="disabled">Pilih Kategori</option>

                <?php $result= mysqli_query("Select")?>
            <?php 
            $result = $this->db->query("SELECT * FROM tb_kategori")->result();
            foreach($result  as $rsl) : ?>
                <option value="<?php echo $rsl->id ?>"><?php echo $rsl->kategori?></option>
                <?php endforeach; ?>
                </select>
        <div class="form-group">
     <label>Gambar</label>
     <input style="color:#ffffff;" required type="file" name="gambar" class="form-control">
        <?= form_error('gambar','<small class="text-danger pl-3">','</small>')  ?>
     <div class="form-group">
          <label> Tanggal Posting</label>
          <input style="color:#000;" type="date" required name="tgl_posting" class="form-control" required>

                       <?= form_error('tgl_posting','<small class="text-danger pl-3">','</small>')  ?>
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