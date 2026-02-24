<?php
$host='localhost';
$dbname='tutorialphp';
$username='root';
$pass='';

// Menghubungkan database PDO;=> (PDO adalah sebuah class);=> $pdo = new PDO("databseyangdigunakan:host=$host; dbname=$dbname", $username, $pass);
try{
$pdo = new PDO("mysql:host=$host; dbname=$dbname", $username, $pass);
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
    die("Koneksi database gagal : ".$e->getMessage());
}


?>