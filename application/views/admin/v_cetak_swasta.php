<!DOCTYPE html>
<html>
<head>
	<title>Cetak Kerja Sama UNIB dengan Perusahaan</title>
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
				<h3 align="center">KERJA SAMA UNIB DENGAN PERUSAHAAN</h3>
			</section>
			<section class="content">
				<div class="row">
					<div class="col-md-12">
						<table border="1" cellpadding="5px" cellspacing="0px" style="font-size:11;" width="100%">
							<thead align="center" style="background-color:#D3D3D3">
								<tr>
									<th width="1%">No</th>
		                            <th>Institusi</th>                            
		                            <th>Nama Kerja Sama</th>                            
									<th>Jenis Kerja Sama</th>  
									<th>Tanggal Mulai</th>                           
		                            <th>Tanggal Berakhir</th>                            
								</tr>
							</thead>
							<tbody style="font-size:9;">
								<?php
								$no = 1;
								foreach($cetak as $d){
								?>
								<tr align="center">
									<td><?php echo $no++; ?></td>                              
	                                <td><?php echo $d->institusi; ?></td>                                
	                                <td><?php echo $d->nama_kerjasama; ?></td>                                
	                                <td><?php echo $d->mou_or_pks; ?></td>                                
	                                <td><?php echo date('d F Y', strtotime($d->tgl_mulai)); ?></td>
	                                <td><?php echo date('d F Y', strtotime($d->tgl_akhir)); ?></td>
								</tr>
								<?php }	?>
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