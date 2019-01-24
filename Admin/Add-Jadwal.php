<?php include "../User/head.php"?>
<link rel="stylesheet" type="text/css" href="../CSS/validasi.css" />
    <?php
	if(isset($_GET['notif'])){
	   $notif = $_GET['notif'];
	}
    else{
        $notif='';
    }

    $pesan='';
    if($notif=='sukses'){
        $pesan="Jadwal berhasil ditambahkan...!!!";
    }
    ?>
    
    <div class="col-sm-8 text-left"> 
      <h3>Tambah Jadwal</h3>
      <hr>
      <b><?php echo $pesan; ?></b>
      <?php include 'Form-Jadwal.php'; ?>
    </div>
    
<?php include "../User/foot.php"?>