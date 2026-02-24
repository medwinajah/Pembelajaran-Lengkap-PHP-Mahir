<?php
// Membuat class (Blueprint sebuah object);
class mobil{
public $merek;


public function drive(){
    echo "Mobil dijalankan";
}
}

// Instance object
$car=new mobil();
$car->merek="Avanza";
echo $car->merek;  // Avanza
echo "<br>";
echo $car->drive(); // Mobil dijalankan
?>