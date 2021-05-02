<!--Start topbar header-->
<link href="<?= base_url('')?>assets/dua/img/unib.png" rel="icon">
  <link href="<?= base_url('')?>assets/dua/img/unib.png" rel="apple-touch-icon">

  <?php
$user= $this->db->get_where('tb_admin',['email'=> $this->session->userdata('email')])->row_array();
?>
<!--Start topbar header-->
<header class="topbar-nav">
 <nav class="navbar navbar-expand fixed-top">
  <ul class="navbar-nav mr-auto align-items-center">
    <!-- <li class="nav-item">
      <a class="nav-link toggle-menu" href="javascript:void();">
       <i class="icon-menu menu-icon"></i>
     </a>
    </li> -->
  </ul>
  <ul class="navbar-nav align-items-center right-nav-link">
      <li class="nav-item language">
      <!-- <?php if($_SESSION['nonaktifkan']){
        echo base_url('pangkalandata/nonaktifkan/').$nonaktifkan->id;
      }
        ?> -->
      <a  style="font-size:16px;margin-top:7px"  class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();"><i class="icofont-notification">
        <?php
		  	$notifikasi= $this->db->query("SELECT id,nama_kerjasama,tgl_akhir,status,DATEDIFF(tgl_akhir,CURRENT_DATE()) AS selisih FROM tb_kerjasama  WHERE (DATEDIFF(tgl_akhir,CURRENT_DATE())=0 or DATEDIFF(tgl_akhir,CURRENT_DATE())=1 or DATEDIFF(tgl_akhir,CURRENT_DATE())=2 or DATEDIFF(tgl_akhir,CURRENT_DATE())=3) and status='aktif' ORDER BY tgl_akhir ASC")->result();
		  	$habis= $this->db->query("SELECT id,nama_kerjasama,tgl_akhir,status,DATEDIFF(tgl_akhir,CURRENT_DATE()) AS selisih FROM tb_kerjasama  WHERE (DATEDIFF(tgl_akhir,CURRENT_DATE())=0) and status='aktif' ORDER BY tgl_akhir ASC")->result();
		  	$min1= $this->db->query("SELECT id,nama_kerjasama,tgl_akhir,status,DATEDIFF(tgl_akhir,CURRENT_DATE()) AS selisih FROM tb_kerjasama  WHERE (DATEDIFF(tgl_akhir,CURRENT_DATE())=1) and status='aktif' ORDER BY tgl_akhir ASC")->result();
		  	$min2= $this->db->query("SELECT id,nama_kerjasama,tgl_akhir,status,DATEDIFF(tgl_akhir,CURRENT_DATE()) AS selisih FROM tb_kerjasama  WHERE (DATEDIFF(tgl_akhir,CURRENT_DATE())=2) and status='aktif' ORDER BY tgl_akhir ASC")->result();
		  	$min3= $this->db->query("SELECT id,nama_kerjasama,tgl_akhir,status,DATEDIFF(tgl_akhir,CURRENT_DATE()) AS selisih FROM tb_kerjasama  WHERE (DATEDIFF(tgl_akhir,CURRENT_DATE())=3) and status='aktif' ORDER BY tgl_akhir ASC")->result();
        
        if(count($notifikasi)>0){
        echo count($notifikasi);
      }
      else{
        echo '0';
      }
      ?>
      </i></a>
      <ul style="font-size:15px;background-color:#2b5981" class="dropdown-menu dropdown-menu-right mr-3">
      <?php
      if(count($notifikasi)<=0){
        echo '<li style="font-size:15px;background-color:#2b5981" class="dropdown-item">Tidak Ada Data</li>';
      }
      else{
      foreach ($habis as $notif)
      {
        if(count($notifikasi)<0){
          echo '<li style="font-size:15px;background-color:#2b5981" class="dropdown-item">Tidak Ada Data</li>';

        }
        else{
        echo anchor('admin/pangkalandata/setNonaktif/'.$notif->id,'<li style="font-size:15px;background-color:#2b5981" class="dropdown-item"><i style="color:#ed0000" class="icofont-clock-time"></i> masa kerja sama "'.$notif->nama_kerjasama.'" <strong style="color:#ed0000">Telah berakhir</strong></li>');

        }
      }
      foreach ($min1 as $notif)
      {
       
        echo anchor('admin/pangkalandata/setMin1/'.$notif->id,'<li style="font-size:15px;background-color:#2b5981" class="dropdown-item"><i style="color:#ed0000" class="icofont-clock-time"></i> masa kerja sama "'.$notif->nama_kerjasama.'" tinggal <strong style="color:#ed0000">'.$notif->selisih.'</strong> hari lagi</li>');

      }
      foreach ($min2 as $notif)
      {
       
        echo anchor('admin/pangkalandata/setMin2','<li style="font-size:15px;background-color:#2b5981" class="dropdown-item"><i style="color:#ed0000" class="icofont-clock-time"></i> masa kerja sama "'.$notif->nama_kerjasama.'" tinggal <strong style="color:#ed0000">'.$notif->selisih.'</strong> hari lagi</li>');

      }
      foreach ($min3 as $notif)
      {
        
        echo anchor('admin/pangkalandata/setMin3','<li style="font-size:15px;background-color:#2b5981" class="dropdown-item"><i style="color:#ed0000" class="icofont-clock-time"></i> masa kerja sama "'.$notif->nama_kerjasama.'" tinggal <strong style="color:#ed0000">'.$notif->selisih.'</strong> hari lagi</li>');

      }
    }
          
        ?>
			</ul>
    </li>
    <li class="nav-item">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
        <span class="user-profile"><img src="<?=base_url('assets/dua/img/profil/').$user['foto']?>" class="img-circle" alt="user avatar"></span>
      </a>
      <ul style="background-color:#2b5981" class="dropdown-menu dropdown-menu-right">
       <li style="background-color:#2b5981" class="dropdown-item user-details">
        <a href="javaScript:void();">
           <div class="media">

             <div class="avatar"><img class="align-self-start mr-3" src="<?=base_url('assets/dua/img/profil/').$user['foto']?>" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-2 user-title"><?php echo  $user['nama'] ?></h6>
            <p class="user-subtitle"><?php echo $user['email'] ?></p>
            </div>
           </div>
          </a>
        </li>
    
        <li style="background-color:#2b5981" class="dropdown-divider"></li>
        <li style="background-color:#2b5981" onclick="window.location.href='<?=base_url('admin/profil')?>'" class="dropdown-item"><i class="icon-user mr-2"></i> Profil</li>
        <li style="background-color:#2b5981" class="dropdown-divider"></li>
        <li style="background-color:#2b5981" onclick="window.location.href='<?=base_url('logout')?>'" class="dropdown-item"><i class="icon-power mr-2"></i> Logout</li>
      </ul>
    </li>
  </ul>
</nav>
</header>