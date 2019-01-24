<?php 
include "../User/head.php";
include "../class/saveJadwal.php";
?>
<?php
	if(isset($_GET['notif'])){
	   $notif = $_GET['notif'];
	}
    else{
        $notif='';
    }

    $pesan='';
    if($notif=='sukses'){
        $pesan="Jadwal berhasil diupdate...!!!";
    }
?>
<link rel="stylesheet" type="text/css" href="../css/validasi.css" />
    <div class="col-sm-8 text-left"> 
      <h3>Edit dan Hapus Jadwal</h3>
      <hr>
      <p class="p">DATA JADWAL</p>
<?php
echo "<b>".$pesan."</b><br>";
$tmpl = new saveJadwal();
$id = new dbIdentity();
$db = new database($id->host, $id->user, $id->pass, $id->nameDb);
$con = $db->connectMysql();
if(isset($_GET['op'])){
    if($_GET['op']=='del'){
        $no = $_GET['no'];
        $db->hapusData($no);
    }
}
$tmpl->tampilData($con);
?>
<br />
    <br />
    </div>
    
<?php include "../User/foot.php"?>