<?php
// Memulai session
session_start();

// Mendeklarasikan session dengan valuenya
$_SESSION["nama"]="Medwin Alfredo Silalahi";

// Memeriksa session sudah ada
if(isset($_SESSION["nama"])){
    echo $_SESSION["nama"];
}

// Memeriksa session jika tidak ada
else{
    echo "Session tidak titemukan";
}

// Menghapus session satu persatu
// unset($_SESSION["nama"]);

// Menghapus semua session
session_destroy();
$_SESSION=[];

echo $_SESSION["nama"];
?>