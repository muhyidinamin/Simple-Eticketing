      <form id="form" name="cek jadwal" action="Save-jadwal.php" method="POST">
            <label for="kelas" id="kelas">Kelas</label>
                <select name="kelas" id="s-kelas">    
                    <option value="">Silahkan pilih</option>    
                    <option value="Ekonomi">Ekonomi</option>    
                    <option value="Bisnis">Bisnis</option>
                    <option value="Eksekutif">Eksekutif</option>        
                </select>
                
            <label for="date" id="l-date">Tanggal</label>
            <input type="date" id="date" name="tgl" required><br />

            <label for="asal" id="asal">Kota Asal</label>
                <select name="asal" id="s-asal">    
                    <option value="">Silahkan pilih</option>    
                    <option value="Karawang">Karawang</option>    
                    <option value="Jakarta">Jakarta</option>        
                </select>
                
            <label for="no.hp" id="l-harga">Harga</label>
            <input type="text" id="harga" name="harga" required ><br />     

            <label for="tujuan" id="tujuan">Kota Tujuan</label>
                <select name="tujuan" id="s-tujuan" >    
                    <option value="">Silahkan Pilih</option>    
                    <option value="Bandung">Bandung</option>    
                    <option value="Jakarta">Jakarta</option>    
                    <option value="Solo">Solo</option>    
                    <option value="Semarang">Semarang</option>    
                    <option value="Yogyakarta">Yogyakarta</option>    
                    <option value="Surabaya">Surabaya</option>    
                </select>
        
            <label for="email" id="kap">Kapasitas</label>
            <input type="text" id="kapasitas" name="kapasitas" required><br />
                
            <input type="submit" id="submit" value="Add Jadwal">
        </form>