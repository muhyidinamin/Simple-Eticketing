<?php
session_start();
include "Class/Jadwal.php";
class book extends jadwal{
    
    function input(){    
        $this->kelas=$_SESSION['Kelas'];
        $this->tgl=$_SESSION['Tgl']; 
        $this->asal=$_SESSION['Asal'];
        $this->tujuan=$_SESSION['Tujuan'];
    
    }
}

?>