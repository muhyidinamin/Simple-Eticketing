<?php
 include "../Class/Jadwal.php";
 
 class saveJadwal extends jadwal{
    public $harga;
    public $kapasitas;
    
    public function input(){
            $this->kelas=$_POST['kelas'];
            $this->tgl=$_POST['tgl'];
            $this->asal=$_POST['asal'];
            $this->tujuan=$_POST['tujuan'];
            $this->harga=$_POST['harga'];;
            $this->kapasitas=$_POST['kapasitas'];
    }
    
    function tampilData($con){
        echo "<table id='valid' border='1' align='center'>";
        echo "<tr><th>Kelas</th><th>Tanggal</th><th>Asal</th><th>Tujuan</th><th>Harga</th><th>Kapasitas</th><th>Action</th></tr>";
        
        $query = "SELECT * FROM tb_jadwal ORDER BY No";
        $hasil = mysqli_query($con, $query);
        $i = 1;
        while($data = mysqli_fetch_array($hasil)){
            echo    "<tr><td>".$data['Kelas']."</td><td>".$data['Tgl'].
                    "</td><td>".$data['Asal']."</td><td>".$data['Tujuan'].
                    "</td><td>Rp. ".$data['Harga']."</td><td>".$data['Kapasitas'].
                    "</td><td>
            
                    <a href='Edit-Jadwal.php?no=".$data['No']."'>Edit</a>
                    <a href='".$_SERVER['PHP_SELF']."?op=del&no=".$data['No']."'>Hapus</a></td></tr>";
            $i++;
        }
        echo "</table>";
    }
}

?>