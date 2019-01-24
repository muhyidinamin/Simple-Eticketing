<form name="cek jadwal" action="View-Jadwal.php" method="POST">
    <h3 text-align= "left">Cek Jadwal</h3>
    <div id="form">
    <label for="date">Tanggal</label><br />
    <input type="date" id="date" name="tgl"><br />

    <label for="asal">Kota Asal</label><br />
    <select name="asal">    
        <option value="">Silahkan pilih</option>    
        <option value="Karawang">Karawang</option>    
        <option value="Jakarta">Jakarta</option>        
    </select>     

    <label for="tujuan">Kota Tujuan</label><br />
    <select name="tujuan">    
        <option value="">Silahkan Pilih</option>    
        <option value="Bandung">Bandung</option>    
        <option value="Jakarta">Jakarta</option>    
        <option value="Solo">Solo</option>    
        <option value="Semarang">Semarang</option>    
        <option value="Yogyakarta">Yogyakarta</option>    
        <option value="Surabaya">Surabaya</option>    
    </select>
    
    <input type="submit" value="Cek Jadwal">
  </form>
</div>
</form>