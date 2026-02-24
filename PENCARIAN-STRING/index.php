<?php
// Mencari sebuah kata dalam sebuah variabel string yang menghasilkan output index lokasi dari kata yang dicari

// Menggunakan strpos($variabel,"kata yang dicari"); (Mencari kata tertentu dan mengembalikan posisi pertama yang ditemukan);
$nama="Medwin Alfredo Silalahi Silalahi";
$pertama=strpos($nama,"Alfredo");
var_dump($pertama,"Alfredo"); // int(7);

// Menggunakan strrpos($variabel,"kata yang dicari"); ("Mencari kata tertentu dan mengamblil posisi terakhirnya);
$terakhir=strrpos($nama,"Silalahi");
var_dump($terakhir); // string(7) "Alfredo" int(24);
?>
