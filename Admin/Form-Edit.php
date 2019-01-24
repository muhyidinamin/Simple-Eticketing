<?php       
$no = $_GET['no'];
$query = mysqli_query($con, "select * from tb_jadwal where No='$no'");
$data = mysqli_fetch_array($query);
$_SESSION['no']=$_GET['no']; 
 ?>

      <form id="form" name="cek jadwal" action="Control-Edit.php" method="POST">
            <label for="kelas" id="kelas">Kelas</label>
                <select name="kelas" id="s-kelas">    
                    <option value="<?php echo $data['Kelas']?>"><?php echo $data['Kelas']?></option>    
                    <option value="Ekonomi">Ekonomi</option>    
                    <option value="Bisnis">Bisnis</option>
                    <option value="Eksekutif">Eksekutif</option>        
                </select>
                
            <label for="date" id="l-date">Tanggal</label>
            <input type="date" id="date" name="tgl" value="<?php echo $data['Tgl']?>" required><br />

            <label for="asal" id="asal">Kota Asal</label>
                <select name="asal" id="s-asal">    
                    <option value="<?php echo $data['Asal']?>"><?php echo $data['Asal']?></option>    
                    <option value="Karawang">Karawang</option>    
                    <option value="Jakarta">Jakarta</option>        
                </select>
                
            <label for="no.hp" id="l-harga">Harga</label>
            <input type="text" id="harga" name="harga" value="<?php echo $data['Harga']?>" required ><br />     

            <label for="tujuan" id="tujuan">Kota Tujuan</label>
                <select name="tujuan" id="s-tujuan" >    
                    <option value="<?php echo $data['Tujuan']?>"><?php echo $data['Tujuan']?></option>    
                    <option value="Bandung">Bandung</option>    
                    <option value="Jakarta">Jakarta</option>    
                    <option value="Solo">Solo</option>    
                    <option value="Semarang">Semarang</option>    
                    <option value="Yogyakarta">Yogyakarta</option>    
                    <option value="Surabaya">Surabaya</option>    
                </select>
        
            <label for="email" id="kap">Kapasitas</label>
            <input type="text" id="kapasitas" name="kapasitas" value="<?php echo $data['Kapasitas']?>" required><br />
                
            <input type="submit" id="submit" value="Update Jadwal">
        </form>