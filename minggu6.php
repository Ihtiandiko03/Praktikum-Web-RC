<?php

include "index.php";

class buah
{
    var $ttlMangga, $ttlJambu, $ttlSalak;
   
    public function __construct($mangga, $jambu, $salak){
        $this->mangga = $mangga;
        $this->jambu = $jambu;
        $this->salak = $salak;
    }

    public function getMangga(){
        $this->ttlMangga = $this->mangga * 15000;
        echo '<h5 style="text-align: center;">Harga Mangga : '.$this->ttlMangga.'</h5>';
    }

    public function getJambu(){
        $this->ttlJambu = $this->jambu * 13000;
        echo '<h5 style="text-align: center;">Harga Jambu : '.$this->ttlJambu.'</h5>';
    }

    public function getSalak(){
        $this->ttlSalak = $this->salak * 10000;
        echo '<h5 style="text-align: center;">Harga Salak : '.$this->ttlSalak.'</h5>';
    }

    public function total(){
        $total = $this->ttlMangga + $this->ttlJambu + $this->ttlSalak;
        echo '<h5 style="text-align: center;">Total : '.$total.'</h5>';
    }
}

$mangga = $_POST["mangga"];
$jambu = $_POST["jambu"];
$salak = $_POST["salak"];
$transaksi = new buah($mangga, $jambu, $salak);
$transaksi->getMangga();
$transaksi->getJambu();
$transaksi->getSalak();
$transaksi->total();
?>