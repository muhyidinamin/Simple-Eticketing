<?php
class jadwal{
    public $tgl;
    public $asal;
    public $tujuan;
    public $kelas;
        
        function input(){
            $this->tgl = $_POST['tgl'];
            $this->asal = $_POST['asal'];
            $this->tujuan = $_POST['tujuan'];
        }
        
        function tampilJadwal($con){
                $query = "SELECT * from tb_jadwal where Tgl like '%$this->tgl%' && Asal like '%$this->asal%' && 
                            Tujuan like '%$this->tujuan%'";
                $hasil = mysqli_query($con, $query);
                if($hasil){
                    echo "<h4>Ketersediaan Tiket tanggal ".$this->tgl."<br> Dari ".$this->asal." Tujuan ".$this->tujuan."</h4>";
                    echo "<table>";
                    echo "<tr>
                        <th>TRANSUNSIKA</th>
                        <th>BERANGKAT</th>
                        <th>HARGA</th>
                        <th></th>
                    </tr>";   
                    while($data = mysqli_fetch_array ($hasil)){
                        echo "<tr><td>".$data['Kelas']."</td><td>16:00 WIB</td><td>".$data['Harga']."</td><td><a href='"."Reservasi.php?op=add&kelas=".$data['Kelas']."'><button class='button button1' type='submit'>Booking</button></a></td></tr>"; 
                    }
                    echo "</table>";
                }
                else{
                    echo "Jadwal tidak Tersedia";
                }
        }
}
?>