<?php
include "User/Header.php";
?>

<?php
	include "Form-reservasi.php";
?>

<?php
session_start();
if(isset($_GET['op'])){
    if($_GET['op']=='add')
        $_SESSION['Kelas']= $_GET['kelas'];
    else
        echo 'gagal';
}
?>

<?php
	include "User/Footer.php";
?>