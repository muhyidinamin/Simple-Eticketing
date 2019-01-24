<?php include 'User/Header.php'?>
<link rel="stylesheet" type="text/css" href="css/TableStyle.css" />
<?php include 'Class/Database.php';
      include 'Class/Db-Identity.php';
      include 'Class/Jadwal.php';  
?> 
<?php
$cek = new jadwal();
$cek->input();
$id = new dbIdentity();
$db = new database($id->host, $id->user, $id->pass, $id->nameDb);
$con = $db->connectMysql();
session_start();
$_SESSION['Tgl']=$cek->tgl;
$_SESSION['Asal']=$cek->asal;
$_SESSION['Tujuan']=$cek->tujuan;
if(empty($cek->asal)or empty($cek->tujuan) or empty($cek->tgl) or empty($cek->tgl)){
    include 'Form-Cek.php';
    echo "<b>Silahkan isi semua field yang ada...!!!<b>";
}
else{
    $cek->tampilJadwal($con);
}
?>
<?php include 'User/Footer.php'?>