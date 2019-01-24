<?php

class confirm{
    public $namaRek;
    public $noRek;
    public $bank;
    public $nominal;
    public $confirm;
    public $no;
    
    public function input(){
            $this->no=$_SESSION['code'];
            $this->namaRek=$_POST['namaRek'];
            $this->noRek=$_POST['noRek'];
            $this->bank=$_POST['bank'];
            $this->nominal=$_POST['nominal'];
            $this->confirm=$_POST['confirm'];
    } 
}
?>