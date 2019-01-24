<?php
    include '../class/Db-Identity.php';
    include '../class/Database.php';
    include '../class/Admin.php';
    
    session_start();
    $admin = new Admin();
    $id = new dbIdentity();
    $db = new database($id->host, $id->user, $id->pass, $id->nameDb);
    $con = $db->connectMysql();
    $admin->cekAdmin($con);
     
?>