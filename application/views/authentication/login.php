<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://use.fontawesome.com/releases/v5.7.2/css/all.css' rel='stylesheet'>
    <link href="<?=base_url('assets/login/style.css')?>" rel='stylesheet'>
    <link href="<?= base_url('')?>assets/dua/img/unib.png" rel="icon">
    <link href="<?= base_url('')?>assets/dua/img/unib.png" rel="apple-touch-icon">    
    <script language='JavaScript'>
var txt="UPT KSLI UNIB | Login Pangkalan Data ";
var speed=300;
var refresh=null;
function action() { document.title=txt;
txt=txt.substring(1,txt.length)+txt.charAt(0);
refresh=setTimeout("action()",speed);}action();
</script>
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js'></script>
<script type='text/javascript'></script>
</head>
<body oncontextmenu='return false' class='snippet-body'>
<div style="backround-color:#fff;margin-top:50px" class="container d-flex justify-content-center">

    <div class="d-flex flex-column justify-content-between">
<a href="<?=base_url('')?>"><i class="fa fa-arrow-left"> Kembali ke beranda</i></a>
<br>
        <div class="card mt-1 p-5">
            <div>
                <img style="margin-bottom:10px" width="50px" src="<?= base_url('')?>assets/dua/img/unib.png">
                <p style="color:#fff;font-size:17px" >Kelola Pangkalan Data Universitas Bengkulu</p>
                <h4 style="font-size:20px" class="mb-3 text-white">Admin Only</h4>
            </div>
        </div>
        <div class="card two bg-white px-5 py-4">
        <?= $this->session->flashdata('message'); ?>
                    <form class="user" method="post" action="<?=base_url('login'); ?>">
                    
                      <div class="form-group">
                      <input type="text" class="form-control" id="email" 
                      name="email" placeholder="Email Anda" >

                       <?= form_error('email','<small class="text-danger pl-3">','</small>')  ?>
                    </div>
                    <div class="form-group">
              <input type="password" class="form-control" id="password" 
                      name="password" placeholder="Password">&nbsp;
              <input type='checkbox' id='toggle' value='0' onchange='togglePassword(this);'>&nbsp; <span id='toggleText'>Show Password</span>
                       <?= form_error('password','<small class="text-danger pl-3">','</small>')  ?>
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      Login
                    </button>
                  </form>
        </div>
    </div>
</div>
    </body>
    <script type="text/javascript">
 
 function togglePassword(el){
 
  // Checked State
  var checked = el.checked;

  if(checked){
   // Changing type attribute
   document.getElementById("password").type = 'text';

   // Change the Text
   document.getElementById("toggleText").textContent= "Hide Password";
  }else{
   // Changing type attribute
   document.getElementById("password").type = 'password';

   // Change the Text 
   document.getElementById("toggleText").textContent= "Show Password";
  }

 }
 
</script>
</html>