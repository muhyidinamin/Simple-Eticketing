<?php include 'User/Header.php'?>
<?php include 'Class/Database.php';
      include 'Class/Db-Identity.php';
      include 'Class/Confirm.php';
?>
<?php
$valid = new confirm();
session_start();
$valid->input();
$id = new dbIdentity();
$db = new database($id->host, $id->user, $id->pass, $id->nameDb);
$db->connectMysql();
echo "<h3 text-align='left'>Konfirmasi Berhasil</h3>";
$db->addConfirm($valid->no, $valid->namaRek, $valid->noRek, $valid->bank,$valid->nominal, $valid->confirm);
echo " <b>".$valid->no."</b><br>";
echo "Proses validasi akan memakan waktu max 24 jam. Mohon sabar menunggu";
?>
<?php include 'User/Footer.php'?>