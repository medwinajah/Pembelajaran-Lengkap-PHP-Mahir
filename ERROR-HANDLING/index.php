<?php
// // Notice Error
// $num=11;
// echo "$number";  // Warning sebagai tanda notice  error namun kode setelahnya tetap dieksekusi;
// echo "Kode setelah notice error";
// echo "<hr>";

// // Warning Error (pemberitahuan berupa warning ada dua dan kode setelahnya masih dapat dieksekusi);
// include("config.php");
// echo "Kode setelah Warning Error";
// echo "<hr>";

// // Fatal-Error (Pemberitahuan error ada dua yaitu Warning kemudian dilanjut Fatal-Error dan kode setelah Fatal-Error tidak akan dieksekusi);

// require "config.php"; // 1 (File yang direquire tidak ada);
// pembagiandenganNol(); // 2 (Pemanggilan function yang belum dideklarasikan)
// echo "Kode setelah Fatal-Error"; //Tidak akan dijalankan;


// Mengatasi Error dengan tyr,catch dan finally
function pembagian($pembilang, $penyebut){
    if($penyebut==0){
        throw new Exception ("Pembagian dengan nol tidak diperbolehkan.");
    }else{
        return $pembilang / $penyebut;
    }
} 

try{
pembagian(10,0);
}
catch(Exception $e){
// echo "Error : ",$e->getMessage(); 
// echo "Error : ",$e->getCode(); 
// echo "Error : ",$e->getFile(); 
echo "Error : ",$e->getLine(); 

// Error getMessage()=> Error : Pembagian dengan nol tidak diperbolehkan;
// Error getCode()=>  Error : 0;
// Error getFile()=>  Error : C:\xamppp\htdocs\PHP-MAHIR\ERROR-HANDLING\index.php;
// Error getLine()=>  Error : 23
}
finally{
    echo "<br>";
    echo "Pengecekan berhasil dilakukan";
}



?>
