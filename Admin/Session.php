<?php
include 'LoginAdmin.php';

      if (empty($_SESSION['username'])) {
        header("location:index.php"); // jika belum login, maka dikembalikan ke file form_login.php
      }
      else {
        echo 'Selamat <b>'.$_SESSION['username'].'</b> Berhasil Masuk <br />';
        }
?>