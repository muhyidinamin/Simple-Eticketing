<?php
include('../Admin/session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Administration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/Style1.css" />
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="Homepage.php">Administration</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right" id="log">
        <li>Welcome, <i><?php echo $_SESSION['username']; ?></i></li>
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><a href="Add-Jadwal.php"><button class="button">Tambah Jadwal</button></a></p>
      <p><a href="Update-Jadwal.php"><button class="button button1">Update Jadwal</button></a></p>
      <p><a href="Data-Customer.php"><button class="button button2">Data Customer</button></a></p>
      <p><a href="Data-Confirm.php"><button class="button button2">Data Konfirmasi</button></a></p>
    </div>