<?php
// Menggunakan str_replace("Kata lama", "kata baru", $variable); ("Mengganti kata pada sebuah variable");
$hobbi= "Saya suka wanita yang lemah lembut, baik dan sopan";
$hobbibaru=str_replace("lemah","anggun,",$hobbi);
var_dump($hobbibaru); // string(52) "Saya suka wanita yang anggun, lembut, baik dan sopan";
echo "<br>";



// Menggunakan strlen($variable);  (Mengetahui panjang string);
var_dump(strlen($hobbibaru));  // int(52);


// Menggunakan strtoupper($variable); (Merubah tulisan menjadi huruf KAPITAL);
var_dump(strtoupper($hobbibaru)); // string(52) "SAYA SUKA WANITA YANG ANGGUN, LEMBUT, BAIK DAN SOPAN";


// Menggunakan strtolower($variable);  (Meribah tulisan menjadi huruf kecil semua);
var_dump(strtolower($hobbibaru)); // string(52) "Saya suka wanita yang anggun, lembut, baik dan sopan";


// Menggunakan substr($variable, index awal, index batas); (Mengambil String dari index awal sampai index akhir-1);
var_dump(substr($hobbibaru, 0, 17));  //string(17) "Saya suka wanita";
?>