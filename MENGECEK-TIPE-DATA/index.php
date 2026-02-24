<!-- Dengan Menggunakan gettype (Mengembalikan tipe data variable) -->  
 <?php
 $nama="Medwin Alfredo Silalahi";
 $nim = "224510041";
 $prodi = "Teknik Informatika";
 $fakultas = "Ilmu Komputer";

 echo gettype($nama)."<br>";  // String
 echo gettype($nim)."<br>";
 echo gettype($prodi)."<br>";
 echo gettype($fakultas)."<br>";



//  Dengan Menggunakan var_dump (Mengembalikan tipe data, jumlah karakter dan nilai dari variable);
var_dump($nama); // String(23) "Medwin Alfredo Silalahi"

// Dengan Menggunakan is_*($variable) (Mengecek tipe data tertentu) Menghasilkan output true or false (Boolean);
var_dump(is_string($nama)); // boolean(true);  


$isi=gettype($nama);

if(is_string($isi)){
    echo"
    <script>
    alert('Benar tipe data adalah String');
    </script>";
}
 ?>

