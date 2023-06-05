<?php

class Lingkaran {
    // Membuat Lingkaran
    public $jari_jari;
    public const PHI = 3.14;

    // Membuat function 
    public function luas($r){
        return self::PHI * $r * $r;
    }
    public function kel ($r){
        return 2 * self::PHI * $r;
    }
}

// Membuat Objek/Instance
$lingkaran1 = new Lingkaran();
echo "Luas lingkaran1 = " . $lingkaran1->luas(10);
echo "Keliling lingkaran1 = " . $lingkaran1->kel(10);