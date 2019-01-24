<?php include 'User/Header.php'; ?>
<?php
 include 'Class/Database.php'; 
 include 'Class/Db-Identity.php';
 include 'Class/Pemesan.php';
 include 'Class/Booking.php';

 $baru = new pemesan();
 $book = new book();
 $baru->noResi(8);
 $baru->input();
 $book->input();
 $id = new dbIdentity();
 $db = new database($id->host, $id->user, $id->pass, $id->nameDb);
 $db->connectMysql();
 $db->addData($baru->randomString, $baru->nama, $baru->noKtp, $baru->telp,$baru->email);
 $db->addPesanan($baru->randomString,$book->kelas, $book->tgl, $book->asal, $book->tujuan);

 echo "Silahkan catat Code Booking ini baik-baik : <b>.".$baru->randomString.'</b>';
 
?>

<?php include 'User/Footer.php'; ?>