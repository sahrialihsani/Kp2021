<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <script language='JavaScript'>
var txt="UPT KSLI UNIB | EDIT BERITA ";
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
    <button onclick="window.location.href='<?=base_url('admin/berita')?>'" style="border-radius:10px; margin-bottom:10px" class="btn btn-primary"><i class="icofont-arrow-left"></i> Kembali</button>
    
      <div class="box-header with-border">
        <h2 class="justify-content-center text-center" style=" font-weight: 700;
  margin-bottom: 20px;
  font-size: 30px;
  color: #fff;">Ubah data Mitra</h2>
        </div>
        <!-- /.box-header -->
        <?php foreach($data_berita as $brita) { ?>
          <!-- form start -->
          <form action="<?=base_url('admin/berita/ubah_berita');?>" method="post" enctype="multipart/form-data" class="form-horizontal">
            <div class="box-body">
              <div class="form-group">
                <label class="col-sm-2 control-label">Judul</label>
                <input type="hidden" name="id" value="<?= $brita->id;?>">
                <div class="col-sm-12">
                  <input type="text" class="form-control"  name="judul" value="<?= $brita->judul;?>" required>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Isi</label>
                <div class="col-sm-12">
                  <textarea type="text" class="form-control" name="isi" required><?= $brita->isi;?></textarea>
                </div>
              </div>
                <div class="form-group">
                <label class="col-sm-2 control-label">Kategori</label>
                <div class="col-sm-12">
                <select  name="kategori" class="form-control" required>
                <?php $result= mysqli_query("Select")?>
            <?php 
            $result = $this->db->query("SELECT * FROM tb_kategori")->result();
            foreach($result  as $rsl) : ?>

                <option value="<?php echo $rsl->id ?>"><?php echo $rsl->kategori?></option>
                <?php endforeach; ?>
                </select>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Gambar</label>
                <div class="col-sm-12">
                <img src="<?php echo base_url('assets/dua/img/berita/'.$brita->gambar)?>" width="200" height="100">
                  <input type="file" class="form-control" name="gambar" value="<?= $brita->gambar;?>" required>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Tanggal Postingan</label>
                <div class="col-sm-12">
                  <input type="date" class="form-control" name="tgl_posting" value="<?= $brita->tgl_posting;?>" required>
                </div>
              </div>
                
              <div class="form-group">
                <label class="col-sm-2 control-label"></label>
                <div class="col-sm-12">
                  <button  type="submit" class="btn btn-primary btn-flat" title="Simpan Data Pengawas"><span class="fa fa-save"></span> Simpan</button>
                </div>
          </form>
        <?php } ?>
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