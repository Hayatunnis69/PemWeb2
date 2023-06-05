<?php

// Buatlah class balok yang memiliki:
// 1. Proprty panjang, lebar dan tinggi
// 2. Method __construct, getLuas, getKeliling dan getVolume

class Balok {
    // Membuat proprty
    public $panjang;
    public $lebar;
    public $tinggi;

    // Membuat Method
    public function __construct($p, $l, $t){
        $this->panjang = $p;
        $this->luas = $l;
        $this->tinggi = $t;
    }
    // Membuat Property
    public function getLuas() {
        return 2 * (($this->panjang * $this->lebar) + ($this->panjang * $this->tinggi) + ($this->lebar * $this->tinggi));
    }
    public function getKeliling() {
        return 4 * ($this->panjang + $this->lebar + $this->tinggi);
    }
    public function getVolume() {
        return $this->panjang * $this->lebar * $this->tinggi;
    }
}

// Membuat objek/instance
$balok1 = new Balok(7, 5, 10);
echo "Luas Balok = " . $balok1-> getLuas();
echo "<br>";
echo "Keliling Balok = " . $balok1-> getKeliling();
echo "<br>";
echo "Volume Balok = " . $balok1-> getVolume();
echo "<br>";

$balok2 = new Balok(15, 20, 25);
echo "Luas Balok = " . $balok2-> getLuas() . "cm";
echo "<br>";
echo "Keliling Balok = " . $balok2-> getKeliling() . "cm";
echo "<br>";
echo "Volume Balok = " . $balok2-> getVolume() . "cm";