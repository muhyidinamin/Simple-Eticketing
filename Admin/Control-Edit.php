<?php
include '../Class/Db-Identity.php';
include '../Class/Database.php';
include '../Class/saveJadwal.php';

session_start();
$no = $_SESSION['no'];
$update = new saveJadwal();
$update->input();
$id = new dbIdentity();
$db = new database($id->host, $id->user, $id->pass, $id->nameDb);
$db->connectMysql();
$db->updateData($no, $update->kelas, $update->tgl, $update->asal, 
    $update->tujuan, $update->harga, $update->kapasitas);
?>