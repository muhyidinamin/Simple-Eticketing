<?php

class Code{
    public $noResi;
    
    function input(){
        $this->noResi = $_POST['ID'];
    }
    
    function tampilID($con){
        $query = "SELECT * from tb_penumpang where No like '%$this->noResi%'";
        $hasil = mysqli_query($con, $query);
        $data = mysqli_fetch_array ($hasil);
        if($this->noResi!=$data['No']){
            header("location: CekNo.php?error=salah");
        }
        else{
            echo "<table>";    
            echo "<tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>No KTP</th>
                    <th>Telp</th>
                    <th>Email</th>
                </tr>";
            
            $hasil = mysqli_query($con, $query);
            while($data = mysqli_fetch_array ($hasil)){
                echo 
                "<tr><td>".$data['No'].
                "</td><td>".$data['Nama'].
                "</td><td>".$data['NoKtp'].
                "</td><td>".$data['Telp'].
                "</td><td>".$data['Email'].
                "</td></tr>";
            }
       } 
       echo "</table>"; 
    }
        
    function tampilPesanan($con){ 
        $query = "SELECT * from tb_penumpang where No like '%$this->noResi%'";
        $hasil = mysqli_query($con, $query);
        $data = mysqli_fetch_array ($hasil);
        if($this->noResi!=$data['No']){
            header("location: CekNo.php?error=salah");
        }
        else{
            echo "<table>";    
            echo "<tr>
                    <th>Kelas</th>
                    <th>Tanggal</th>
                    <th>Dari</th>
                    <th>Tujuan</th>
                </tr>";
            
            $query = "SELECT * from tb_pesanan where No like '%$this->noResi%'";
            $hasil = mysqli_query($con, $query);
            while($data = mysqli_fetch_array ($hasil)){
                echo 
                "</td><td>".$data['Kelas'].
                "</td><td>".$data['Tgl'].
                "</td><td>".$data['Asal'].
                "</td><td>".$data['Tujuan'].
                "</td></tr>";
            }
         echo "</table>"; 
         }
    }
        
    function tampilConfirm($con){
        $query = "SELECT * FROM tb_penumpang,tb_pesanan where tb_penumpang.No like '%$this->noResi%' and tb_pesanan.No like '%$this->noResi%'";
        $result = mysqli_query($con, $query);
        $field = mysqli_fetch_array ($result);
        if($this->noResi!=$field['No']){
            header("location: Konfirmasi.php?error=salah");
        }
        else{
            echo "<table border='1'>";
            echo "<tr><th>Nama</th><th>No KTP</th><th>No Telepon</th><th>E-Mail</th>
                    <th>Kelas</th><th>Tanggal</th><th>Asal</th><th>Tujuan</th></tr>";
            $query = "SELECT * FROM tb_penumpang,tb_pesanan where tb_penumpang.No like '%$this->noResi%' and tb_pesanan.No like '%$this->noResi%'";
            $result = mysqli_query($con, $query);
            while($field = mysqli_fetch_array ($result)){
                echo    "<tr><td>".$field['Nama']."</td><td>".$field['NoKtp'].
                        "</td><td>".$field['Telp']."</td><td>".$field['Email'].                    
                        "</td><td>".$field['Kelas']."</td><td>".$field['Tgl'].
                        "</td><td>".$field['Asal']."</td><td>".$field['Tujuan']."</td></tr>";
            }
            echo "</table>";
        }
    }
}
?>