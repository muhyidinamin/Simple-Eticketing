<?php include "../User/head.php"?>
<link rel="stylesheet" type="text/css" href="../css/validasi.css" />
    <div class="col-sm-8 text-left"> 
      <h3>Data Konfirmasi</h3>
      <hr>
      <p class="p">DATA PEMESAN YANG MELAKUKAN KONFIRMASI</p>
<?php
$id = new dbIdentity();
$db = new database($id->host, $id->user, $id->pass, $id->nameDb);
$db->connectMysql();
$db->tampilValidasi();
?>
<br />
<br />
<br />
    </div>
<?php include "../User/foot.php"?>