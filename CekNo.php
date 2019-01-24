<?php
	include 'User/Header.php';
?>
<?php
	if(isset($_GET['error'])){
	   $error = $_GET['error'];
	}
    else{
        $error='';
    }
    $pesan='';
    if($error=='kosong'){
        $pesan="Silahkan isi semua field yang ada...!!!";
    }
    else if($error=='salah'){
        $pesan="Silahkan isi No Pesanan dengan benar";
    }
?>
<form name="cek jadwal" action="Biodata.php" method="POST">
    <h3 text-align= "left">Cek Code Booking</h3>
<?php include 'Form-Code.php';?>
<?php echo $pesan;?>
<?php
    include 'User/Footer.php';
?>