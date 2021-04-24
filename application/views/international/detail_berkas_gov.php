<html>
    <head>
        <link rel="apple-touch-icon" sizes="76x76" href="<?=base_url('')?>assets/admin/img/logo.jpg">
  <link rel="icon" type="image/png" href="<?=base_url('')?>assets/admin/img/logo.jpg">
  <script language='JavaScript'>
var txt="UPT KSLI UNIB | DETAIL BERKAS ";
var speed=300;
var refresh=null;
function action() { document.title=txt;
txt=txt.substring(1,txt.length)+txt.charAt(0);
refresh=setTimeout("action()",speed);}action();
</script>
<header class="panel-heading">
    <div class="panel-actions">
        <a href="#" class="fa fa-caret-down"></a>
        <a href="#" class="fa fa-times"></a>
    </div>
  <?php foreach($detail_berkas_gov as $berkas): ?>
  <embed type="application/pdf" src="<?=base_url('assets/dua/berkas/kerjasama/pemerintahan/').$berkas->file?>" width="100%" height="100%"></embed>
  <?php endforeach;?>
        </div>
    </div>
</header>
    </head>
</html>