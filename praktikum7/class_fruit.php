<?php

class fruit {
    // Membuat Property
    public $name;
    public $color;
    public $flavor;

    // Membuat Method
    public function getName(){
        return $this->name;
    }
    public function getInfo(){
        return "Buah = " . $this->name . "<br>warna = ". $this->color . "<br>Rasa =". $this->flafor;
    } 

}

// Membuat Objek / Instance
$fruit1 = new fruit();
$fruit1-> name = "Semangka";
$fruit1->color = "Hijau";
$fruit1->flafor = "Manis";

echo "Buah = " . $fruit1->getName();
echo "<br>";
echo $fruit1->getInfo();