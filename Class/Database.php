<?php

class database{
    private $Host;
    private $userName;
    private $pass;
    private $name;
    private $con;
    
    function __construct($a, $b, $c, $d){
        $this->Host = $a;
        $this->userName = $b;
        $this->pass = $c;
        $this->name = $d;
    }
    
    public function connectMysql(){
        $con = mysqli_connect($this->Host, $this->userName, $this->pass, $this->name);
        if (mysqli_connect_errno()) {
                printf("Connect failed: %s\n", mysqli_connect_error());
                exit();
        }
        $this->con = $con;
        return $con;
    }
    
    public function addData($id, $nama, $noKtp, $telp, $email){
        $query = "INSERT INTO tb_penumpang (No, Nama, NoKtp, Telp, Email)
                  VALUES ('$id','$nama','$noKtp','$telp','$email')";
        $hasil = mysqli_query($this->con, $query);
        if($hasil) 
            echo "Selamat Anda berhasil memesan Tiket bus Transunsica.";
        else 
            echo "Data penumpang gagal disimpan ke DB <br>";
    }
    
    public function addPesanan($no, $kelas, $tgl, $asal, $tujuan){
        $query = "INSERT INTO tb_pesanan (No, Kelas, Tgl, Asal, Tujuan)
                  VALUES ('$no', '$kelas','$tgl','$asal','$tujuan')";
        $hasil = mysqli_query($this->con, $query);
        if($hasil) 
            echo "Silahkan lakukan Transfer sejumlah nilai yang tertera dalam jadwal. 
                <br> Setelah melakukan pembayaran segera lakukan konfirmasi pembayaran dengan menggunkan kode berikut ini.";
        else 
            echo "Data penumpang gagal disimpan ke DB <br>";
    }
    
    public function addJadwal($kelas, $tgl, $asal, $tujuan, $harga, $kapasitas){
        $query = "INSERT INTO tb_jadwal(Kelas, Tgl, Asal, Tujuan, Harga, Kapasitas) 
                    VALUES ('$kelas','$tgl','$asal','$tujuan','$harga','$kapasitas')";
        $hasil = mysqli_query($this->con, $query);
        if($hasil) 
            header ("location:Add-Jadwal.php?notif=sukses");
        else 
            echo "Data penumpang gagal disimpan ke DB <br>";
    }
    
    public function addConfirm($no, $namaRek, $noRek, $bank, $harga, $confirm){
        $query = "INSERT INTO tb_confirm(No, NamaRek, NoRek, Bank, Harga, Status) 
                    VALUES ('$no','$namaRek','$noRek','$bank','$harga','$confirm')";
        $hasil = mysqli_query($this->con, $query);
        if($hasil) 
            echo "Terima Kasih telah melakukan konfirmasi untuk pesanan dengan no pemesanan";
        else 
            echo "Data penumpang gagal disimpan ke DB <br>";
    }
    
    function hapusData($id){
        $query = "DELETE FROM tb_jadwal where No ='$id'";
        mysqli_query($this->con, $query);
        echo "Jadwal dengan ID ".$id." berhasil dihapus";
    }
        
    function updateData($id, $kelas, $tgl, $asal, $tujuan, $harga, $kapasitas){
        $no=$_SESSION['no'];
        $query = "UPDATE tb_jadwal SET Kelas = '$kelas', Tgl = '$tgl', 
                    Asal = '$asal', Tujuan = '$tujuan', Harga = '$harga',
                    Kapasitas = '$kapasitas' where No = '$no'";
        $hasil = mysqli_query($this->con, $query);
        if($hasil) 
            header ("location:Update-Jadwal.php?notif=sukses");
        else 
            echo "Data penumpang gagal disimpan ke DB <br>";
    }
    
    function tampilReport(){
        echo "<table id='validasi' border='1'>";
        echo "<tbody>";
        echo "<tr><th>No</th><th>Nama</th><th>No KTP</th><th>No Telepon</th><th>E-Mail</th>
                <th>Kelas</th><th>Tanggal</th><th>Asal</th><th>Tujuan</th></tr>";
        
        $query = "SELECT * FROM tb_penumpang,tb_pesanan where tb_penumpang.No = tb_pesanan.No";
        $result = mysqli_query($this->con, $query);
        while($field = mysqli_fetch_array ($result)){
            echo    "<tr><td>".$field['No']."</td><td>".$field['Nama'].
                    "</td><td>".$field['NoKtp']."</td><td>".$field['Telp'].
                    "</td><td>".$field['Email']."</td><td>".$field['Kelas'].
                    "</td><td>".$field['Tgl']."</td><td>".$field['Asal'].
                    "</td><td>".$field['Tujuan']."</td></tr>";
        }
        echo "</tbody>";
        echo "</table>";
    }
    
    function tampilValidasi(){
        echo "<table id='validasi' border='1'>";
        echo "<tr><th>No</th><th>Nama</th><th>No Telepon</th><th>E-mail</th><th>Tanggal</th>
                <th>Tujuan</th><th>No.Rekening</th><th>Status</th></tr>";
        
        $query = "SELECT tb_penumpang.No, Nama, Telp, Email, Tgl, Tujuan, NoRek, Status FROM tb_penumpang,tb_confirm, tb_pesanan where tb_penumpang.No = tb_confirm.No and tb_penumpang.No=tb_pesanan.No";
        $result = mysqli_query($this->con, $query);
        while($field = mysqli_fetch_array ($result)){
            echo    "<tr><td>".$field['No']."</td><td>".$field['Nama'].
                    "</td><td>".$field['Telp']."</td><td>".$field['Email'].
                    "</td><td>".$field['Tgl']."</td><td>".$field['Tujuan'].
                    "</td><td>".$field['NoRek']."</td><td>".$field['Status'].
                    "</td></tr>";
        }
        
        echo "</table>";
    }
}
?>