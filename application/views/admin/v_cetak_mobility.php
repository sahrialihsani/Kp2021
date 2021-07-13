<!DOCTYPE html>
<html>
<head>
	<title>Cetak Peserta Program Mobility UNIB</title>
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
				<h3 align="center">PROGRAM MOBILITY UNIB</h3>
			</section>
			<section class="content">
				<div class="row">
					<div class="col-md-12">
						<table border="1" cellpadding="5px" cellspacing="0px" style="font-size:11;" width="100%">
							<thead align="center" style="background-color:#D3D3D3">
								<tr>
									<th width="1%">No</th>
									<th>Nama Program</th>
		                            <th>Nama</th>                            
		                          	<th>Email</th>                           
		                            <th>Status</th>                            
								</tr>
							</thead>
							<tbody style="font-size:9;">
								<?php
								$no = 1;
								foreach($cetak as $d){
								?>
								<tr align="center">
									<td><?php echo $no++; ?></td>                              
	                                <td><?php echo $d->nama; ?></td>
									<td><?php echo $d->nama_lengkap?></td>                                
	                                <td><?php echo $d->email; ?></td>                                
	                                <td><?php echo $d->status; ?></td>                                
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