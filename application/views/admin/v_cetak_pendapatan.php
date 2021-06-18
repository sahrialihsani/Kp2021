<!DOCTYPE html>
<html>
<head>
	<title>Cetak Pendapatan Kerja Sama UNIB (PKS)</title>
</head>
<body>
	<div class="container">
		<div class="content-wrapper">
			<img src="assets/dua/img/unib.png" style="width: 65px; height: auto; position: absolute;">
        
	        <table style="width: 100%;">
	            <tr>
	                <td align="center">
	                    <span> UNIT PELAKSANA TUGAS KERJA SAMA DAN LAYANAN INTERNASIONAL <br> <b> UNIVERSITAS BENGKULU</b> <br> Jl. W.R Supratman Kandang Limun Bengkulu 38371 Sumatera, INDONESIA
						<br>Telepon: (0736) 21170, 21884, Ext (190), e-mail: international@unib.ac.id</span>
	                    <hr>                    
	                </td>
	            </tr>
	        </table>
			<section class="content-header">
				<h3 align="center">PENDAPATAN KERJA SAMA UNIB (PKS)</h3>
			</section>
			<section class="content">
				<div class="row">
					<div class="col-md-12">
						<table border="1" cellpadding="5px" cellspacing="0px" style="font-size:11;" width="100%">
							<thead align="center" style="background-color:#D3D3D3">
								<tr>
									<th width="1%">No</th>
              						<th>Nama Kerja Sama</th>
             						<th>Pendapatan</th>
								</tr>
							</thead>
							<tbody style="font-size:9;">
								<?php
								$no = 1;
								foreach($cetak as $d){
								?>
								<tr align="center">
									<td><?=$no++ ?></td>
     								<td><?=$pdp->nama_kerjasama; ?></td>
     								<td><?php echo'Rp '.number_format($pdp->pendapatan); ?></td>
								</tr>
								<?php }	?>
								<tr>
          <?php
	$hasil=$this->db->query("SELECT tb_kerjasama.*, tb_pendapatan.id, tb_pendapatan.pendapatan,tb_pendapatan.id_kerjasama,SUM(tb_pendapatan.pendapatan) AS total FROM tb_pendapatan inner join tb_kerjasama on tb_pendapatan.id_kerjasama=tb_kerjasama.id WHERE (DATEDIFF(tb_kerjasama.tgl_akhir,CURRENT_DATE())>=0) AND tb_kerjasama.status='Aktif' and tb_kerjasama.mou_or_pks='PKS' ORDER BY tb_pendapatan.pendapatan DESC")->result();
  foreach ($hasil as $tot) { ?>
     <td colspan="2">Total Pendapatan</td>
          <td><?php
               echo 'Rp '.number_format($tot->total);?></td>
         <?php } ?>
	 </tr>
							</tbody>							
						</table>						
					</div>
				</div>
			</section><br>
			<div align="center">
				<?php 
				$date = Date("d F Y");
				echo "Laporan dicetak pada tanggal $date"; 
				?>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		window.print();
	</script>
</body>
</html>