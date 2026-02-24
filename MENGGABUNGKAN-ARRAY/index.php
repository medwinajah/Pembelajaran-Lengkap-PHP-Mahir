<?php
// Fungis array array_merge($array1, $array2); (Menggabungkan Array menjadi satu bagian dan disimpan dalam satu variabel baru);
$nama=['Medwin','Alfredo','Silalahi'];
$pendidikan=['S1 Teknik Informatika', 'Fakultas Ilmu Komputer'];
$gabungan=array_merge($nama,$pendidikan);
foreach($gabungan as $hasil){
    echo $hasil . " ";  // Medwin Alfredo Silalahi S1 Teknik Informatika Fakultas Ilmu Komputer;
}
?>