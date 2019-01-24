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
<form name="cek jadwal" action="Rincian-Pembayaran.php" method="POST">
    <h3 text-align= "left">Konfirmasi Pembayaran</h3>
    <?php include 'Form-Code.php';?>
    <?php echo $pesan; ?>
  </form>
<?php
    include 'User/Footer.php';
?>