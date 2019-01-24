<?php include "../User/head.php"?>
<?php include '../class/saveJadwal.php'; ?>
<?php

 $jad = new saveJadwal();
 $jad->input();
 $id = new dbIdentity();
 $db = new database($id->host, $id->user, $id->pass, $id->nameDb);
 $db->connectMysql();
 $db->addJadwal($jad->kelas, $jad->tgl, $jad->asal, $jad->tujuan, $jad->harga, $jad->kapasitas);
?>
<?php include "../User/foot.php"?>