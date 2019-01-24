<?php

class pemesan{
    public $nama;
    public $randomString = '';
    public $noKtp;
    public $telp;
    public $email;
    
    public function input(){
            $this->nama=$_POST['nama'];
            $this->noKtp=$_POST['noKtp'];
            $this->telp=$_POST['telp'];
            $this->email=$_POST['email'];
    }
    
    public function noResi($panjang){
        $karakter = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ123456789';
        $panjangChar = strlen($karakter);
        for($i=0;$i<$panjang;$i++){
            $this->randomString .= $karakter[rand(0, $panjangChar -1)];
        }
        return $this->randomString;
    }
}

?>