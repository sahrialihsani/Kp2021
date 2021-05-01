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
  <script src="<?=base_url('')?>assets/data/js/jquery.loading-indicator.js"></script>
  <!-- Custom scripts -->
  <script src="<?=base_url('')?>assets/data/js/app-script.js"></script>
  <!-- Chart js -->
  
  <script src="<?=base_url('')?>assets/data/plugins/Chart.js/Chart.min.js"></script>
 
  <!-- Index js -->
  <script src="<?=base_url('')?>assets/data/js/index.js"></script>
  <!-- data masuk -->
<?php
   function digit($angka){
     if($angka < 10){
       return '0'.$angka;
     }
     else{
       return $angka;
     }
   }
   $bulan = array('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
   for ($i=0;$i<12;$i++){
     // code...
     $bln = digit($i+1);
      $no_kk = $this->db->query("SELECT count(*) as jumlah FROM `tb_kerjasama`  WHERE tgl_mulai LIKE '2021-$bln-%' AND jenis='Universitas' AND status='Aktif' ")->result();
      // $no_kk = $this->db->query("SELECT count(*) as jumlah FROM `tb_universitas` GROUP BY YEAR(tgl_masuk)")->result();
      foreach($no_kk as $nk){

          echo "<script>";
        if($nk->jumlah > 0){
          echo "var universitas".$bln."={$nk->jumlah}";}

      else{
        echo "var universitas".$bln."=0";
      }
      echo "</script>";
    }}

    for ($i=0;$i<12;$i++){
      // code...
      $bln = digit($i+1);
      $ikut = $this->db->query("SELECT count(*) as jumlah FROM `tb_kerjasama` WHERE tgl_mulai LIKE '2021-$bln-%' AND jenis='Swasta' AND status='Aktif'")->result();
      // $ikut = $this->db->query("SELECT count(*) as jumlah FROM `tb_swasta` GROUP BY YEAR(tgl_keluar)")->result();
       foreach($ikut as $nk){

           echo "<script>";
         if($nk->jumlah > 0){
           echo "var swasta".$bln."={$nk->jumlah}";}

       else{
         echo "var swasta".$bln."=0";
       }
       echo "</script>";
     }}
     for ($i=0;$i<12;$i++){
      // code...
      $bln = digit($i+1);
      $ikut = $this->db->query("SELECT count(*) as jumlah FROM `tb_kerjasama` WHERE tgl_mulai LIKE '2021-$bln-%' AND jenis='Pemerintahan' AND status='Aktif'")->result();
      // $ikut = $this->db->query("SELECT count(*) as jumlah FROM `tb_swasta` GROUP BY YEAR(tgl_keluar)")->result();
       foreach($ikut as $nk){

           echo "<script>";
         if($nk->jumlah > 0){
           echo "var pemerintahan".$bln."={$nk->jumlah}";}

       else{
         echo "var pemerintahan".$bln."=0";
       }
       echo "</script>";
     }}
          ?>
<script>

        var MONTHS = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
        
        var randomScalingFactor = function() {
            return Math.round(Math.random() * 100);
            //return 0;
        };
        var randomColorFactor = function() {
            return Math.round(Math.random() * 255);
        };
        var randomColor = function(opacity) {
            return 'rgba(' + randomColorFactor() + ',' + randomColorFactor() + ',' + randomColorFactor() + ',' + (opacity || '.3') + ')';
        };

        var config = {
            type: 'line',
            data: {
                labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"],
                datasets: [{
                    label: "Universitas",
                    data: [universitas01,universitas02,universitas03,universitas04,universitas05,universitas06,universitas07,universitas08,universitas09,universitas10,universitas11,universitas12],
                    fill: false,
                    backgroundColor: "black",
                    borderDash: [5, 5],
                    borderColor: "purple",
                }, {
                    label: "Swasta",
                    data: [swasta01,swasta02,swasta03,swasta04,swasta05,swasta06,swasta07,swasta08,swasta09,swasta10,swasta11,swasta12],
                    borderColor: "blue",
                    fill: false,
                    backgroundColor: "blue"

                  }, {
                    label: "Pemerintahan",
                    data: [pemerintahan01,pemerintahan02,pemerintahan03,pemerintahan04,pemerintahan05,pemerintahan06,pemerintahan07,pemerintahan08,pemerintahan09,pemerintahan10,pemerintahan11,pemerintahan12],
                    borderColor: "yellow",
                    fill: false,
                    backgroundColor: "blue"

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
                    text:'Rekapitulasi Kerja Sama Tahun 2021',
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
                        fontSize: 12
                    }
                    }]
                }
            }
        };

        $.each(config.data.datasets, function(i, dataset) {
            dataset.borderColor = randomColor(0.4);
            dataset.backgroundColor = randomColor(0.5);
            dataset.pointBorderColor = randomColor(0.7);
            dataset.pointBackgroundColor = randomColor(0.5);
            dataset.pointBorderWidth = 1;
        });

        window.onload = function() {
            var ctx = document.getElementById("canvasku").getContext("2d");
            window.myLine = new Chart(ctx, config);
        };

        $('#randomizeData').click(function() {
            $.each(config.data.datasets, function(i, dataset) {
                dataset.data = dataset.data.map(function() {
                    return randomScalingFactor();
                });

            });

            window.myLine.update();
        });

        $('#changeDataObject').click(function() {
            config.data = {
                labels: ["July", "August", "September", "October", "November", "December"],
                datasets: [{
                    label: "My First dataset",
                    data: [randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor()],
                    fill: false,
                }, {
                    label: "My Second dataset",
                    fill: false,
                    data: [randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor()],
                }]
            };

            $.each(config.data.datasets, function(i, dataset) {
                dataset.borderColor = randomColor(0.4);
                dataset.backgroundColor = randomColor(0.5);
                dataset.pointBorderColor = randomColor(0.7);
                dataset.pointBackgroundColor = randomColor(0.5);
                dataset.pointBorderWidth = 1;
            });

            // Update the chart
            window.myLine.update();
        });

        $('#addDataset').click(function() {
            var newDataset = {
                label: 'Dataset ' + config.data.datasets.length,
                borderColor: randomColor(0.4),
                backgroundColor: randomColor(0.5),
                pointBorderColor: randomColor(0.7),
                pointBackgroundColor: randomColor(0.5),
                pointBorderWidth: 1,
                data: [],
            };

            for (var index = 0; index < config.data.labels.length; ++index) {
                newDataset.data.push(randomScalingFactor());
            }

            config.data.datasets.push(newDataset);
            window.myLine.update();
        });

        $('#addData').click(function() {
            if (config.data.datasets.length > 0) {
                var month = MONTHS[config.data.labels.length % MONTHS.length];
                config.data.labels.push(month);

                $.each(config.data.datasets, function(i, dataset) {
                    dataset.data.push(randomScalingFactor());
                });

                window.myLine.update();
            }
        });

        $('#removeDataset').click(function() {
            config.data.datasets.splice(0, 1);
            window.myLine.update();
        });

        $('#removeData').click(function() {
            config.data.labels.splice(-1, 1); // remove the label first

            config.data.datasets.forEach(function(dataset, datasetIndex) {
                dataset.data.pop();
            });

            window.myLine.update();
        });
    </script>
</html>