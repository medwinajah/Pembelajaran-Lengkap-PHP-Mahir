<?php
// static =>(Hanya dapat digunakan oleh nama class itu sendiri dan tidak dapat diakses oleh instance obejct, child classnya, atau pun class pewarisan lainnya)=> namaClass ::namaProperties atau ::namaMethod();

class minuman{
    public static $nama;

    public static function penjumlahan($a, $b){
return $a+$b;
    }
}

$a=minuman::$nama="Teh Pucuk Harum";
echo $a."<br>";  // Teh Pucuk Harum
$aa= minuman::penjumlahan(20,20);
var_dump($aa); // int(40);
echo "<br>".$aa; // 40

?>