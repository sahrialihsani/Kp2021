<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <script language='JavaScript'>
var txt="UPT KSLI UNIB | HOME ADMIN ";
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
  <link href="<?= base_url('')?>assets/dua/vendor/icofont/icofont.min.css" rel="stylesheet">
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
	<style>
		.loader {
            border: 10px solid #dfe1e2; /* Light grey */
            border-top: 10px solid rgb(22, 22, 134);
            border-bottom: 10px solid rgb(22, 22, 134);
            border-radius: 50%;
            width: 50px;
            height: 50px;
            animation: spin 2s linear infinite;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        @-webkit-keyframes spin {
            0% { -webkit-transform: rotate(0deg); }
            100% { -webkit-transform: rotate(360deg); }
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
	</style>
  
</head>

<body style="background-color:rgba(3, 56, 102, 0.9);">
<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">

  <!--Start Dashboard Content-->
	<div class="card mt-3">
    <div class="card-content">
        <div class="row row-group m-0">
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0"><?=$total_kerjasama?> <span class="float-right"><i class="fa fa-handshake-o"></i></span></h5>
                    <div class="progress my-3" style="height:3px;">
                    </div>
                  <p class="mb-0 text-white small-font">Total Kerjasama </p>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0"><?=$total_mitra?> <span class="float-right"><i class="fa fa-university"></i></span></h5>
                    <div class="progress my-3" style="height:3px;">
                    </div>
                  <p class="mb-0 text-white small-font">Total Mitra </p>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0"><?=$total_program?> <span class="float-right"><i class="fa fa-file"></i></span></h5>
                    <div class="progress my-3" style="height:3px;">
                    </div>
                  <p class="mb-0 text-white small-font">Total Program </p>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0"><?=$total_organisasi?> <span class="float-right"><i class="fa fa-wifi"></i></span></h5>
                    <div class="progress my-3" style="height:3px;">
                    </div>
                  <p class="mb-0 text-white small-font">Total Keikutsertaan Organisasi </p>
                </div>
            </div>
        </div>
        </div>
      </div>  

      <div class="row justify-content-center">
     <div class="col-12 col-lg-8 col-xl-12">
	    <div class="card">
		 <div class="card-body">
		 		<select name="tahun" id="tahun_kerja" class="form-control mb-3">
					<option value="" selected disabled>Pilih Tahun Grafik</option>
					<?php foreach($tahun_kerja as $thn){  ?>
						<option value="<?= $thn->tahun ?>"><?= $thn->tahun ?></option>
					<?php } ?>
				</select>
				<div class="loader d-none"></div>
			  <canvas id="canvasku"></canvas>
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
 
  <!-- Index js -->
  <script src="<?=base_url('')?>assets/data/js/index.js"></script>
	<script>
		function grafik(tahun){
			$('.loader').removeClass('d-none');
			$('#canvasku').addClass('d-none');
			$.ajax({
					url: "<?php echo base_url() ?>admin/home_admin/load_data",
					method: "GET",
					data:{tahun:tahun},
					success: function(data) {
						var label = data.bulan;
						var value_universitas = data.universitas;
						var value_swasta = data.swasta;
						var value_pemerintahan = data.pemerintahan;
						var ctx = document.getElementById('canvasku').getContext('2d');
						var chart = new Chart(ctx, {
								type: 'bar',
								data: {
										labels: label,
										datasets: [{
                    label: "Universitas",
                    data: value_universitas,
                    fill: false,
                    backgroundColor: "#32E6E0",
                    borderDash: [5, 5],
                    borderColor: "white",
                }, {
                    label: "Swasta",
                    data: value_swasta,
                    borderColor: "white",
                    fill: false,
                    backgroundColor: "#E65132"

                  }, {
                    label: "Pemerintahan",
                    data: value_pemerintahan,
                    borderColor: "white",
                    fill: false,
                    backgroundColor: "#32E683"

                  }
                ]
								},
								options: {
									legend: {
										labels: {
												fontColor: "white",
												fontSize: 14
										}
								},
										responsive: true,
										title:{
												display:true,
												text:'Rekapitulasi Kerja Sama Tahun '+tahun,
												fontColor:'white',
												fontSize: 20

										},
										tooltips: {
												mode: 'label',
												callbacks: {
														// beforeTitle: function() {
														//     return '...beforeTitle';
														// },
														// afterTitle: function() {
														//     return '...afterTitle';
														// },
														// beforeBody: function() {
														//     return '...beforeBody';
														// },
														// afterBody: function() {
														//     return '...afterBody';
														// },
														// beforeFooter: function() {
														//     return '...beforeFooter';
														// },
														// footer: function() {
														//     return 'Footer';
														// },
														// afterFooter: function() {
														//     return '...afterFooter';
														// },
												}
										},
										hover: {
												mode: 'dataset'
										},
										scales: {
												xAxes: [{
														display: true,
														scaleLabel: {
																show: true,
																labelString: 'Month'
														},
														ticks: {
														fontColor: "white",
														fontSize: 12
												}
												}],
												yAxes: [{
														display: true,
														scaleLabel: {
																show: true,
																labelString: 'Value'
														},
														ticks: {
														fontColor: "white",
														fontSize: 12,
														stepSize: 1
												}
												}]
										}
								}
						});
						$('#canvasku').removeClass('d-none');
						$('.loader').addClass('d-none');
					}
			});
		}
		
		window.onload = function exampleFunction() {			
			grafik(2021);
		}
		$('#tahun_kerja').change(function (e) { 
				var tahun=$(this).val();
				grafik(parseInt(tahun))
			});
	</script>
</html>
