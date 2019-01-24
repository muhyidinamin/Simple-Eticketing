<?php include 'User/Header.php'?>
<link rel="stylesheet" type="text/css" href="css/TableStyle.css" />
<?php include 'Class/Database.php';
      include 'Class/Db-Identity.php';
      include 'Class/Code.php';  
?> 
<?php

$cek = new Code();
$cek->input();
$id = new dbIdentity();
$db = new database($id->host, $id->user, $id->pass, $id->nameDb);
$con = $db->connectMysql();
session_start();
if(empty($cek->noResi)){
    header ("location:Konfirmasi.php?error=kosong");
}
else{
    echo '<h3 text-align= "left">Konfirmasi Pembayaran</h3>';
    echo 'Berikut ini data Pesanan dengan No Booking <b>'.$cek->noResi.'</b>';
    $_SESSION['code']=$cek->noResi;
    $cek->tampilConfirm($con);
    echo "Silahkan lakukan konfirmasi dengan mengisi data diri sebagai berikut : ";
    include ('Form-Konfirmasi.php');
}

?>
<?php
	include 'User/Footer.php';
?>