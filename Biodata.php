<link rel="stylesheet" type="text/css" href="css/TableStyle.css" />
<?php
include 'User/Header.php';
include 'Class/Database.php';
include 'Class/Db-Identity.php';
include 'Class/Code.php';

echo '<h3 text-align= "left">Biodata Penumpang</h3>';
$bio = new Code();
$bio->input();
$id = new dbIdentity();
$db = new database($id->host, $id->user, $id->pass, $id->nameDb);
$con = $db->connectMysql();
if(empty($bio->noResi)){
    header ("location:CekNo.php?error=kosong");
}
else{
    $bio->tampilID($con);
    echo"<p></p>";
    $bio->tampilPesanan($con);
}
include 'User/Footer.php';
?>