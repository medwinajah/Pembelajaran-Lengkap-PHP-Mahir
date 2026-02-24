<?php

// interface namainterface{}; (Adalah tempat untuk sekumpulan method yang harus diimplementasikan oleh class yang extends dengan interface tersebut);
interface Buahans{
public function setNama($nama);
}

// Cara menggunakan method interface adalah (class namaClass implements namaInterface);
class buahKuning implements Buahans{
 public $nama;
public function setNama($nama){
    $this->nama=$nama;
}

public function getNama(){
    return $this->nama;
}
}

$buah1 = new buahKuning();
$buah1->setNama("Mangga");
echo $buah1->getNama(); // Mangga
?>