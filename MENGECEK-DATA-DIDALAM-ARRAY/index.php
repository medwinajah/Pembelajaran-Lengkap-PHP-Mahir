<?php
// Menggunakan in_array("Yang dicari",$array); (Mencari kata dalam array atau data dalam array menghasilakn Boolean);

$buah=['Semangka','Rambutan','Pepaya','Anggue'];
$cek=in_array("Semangka",$buah);  // 1
if($cek){   // Ini yang dieksekusi karena Semangka ada didalam array buah;
    echo "  
    <script>
    alert('Semangka ada didalam Array buah');
    </script>
    ";
}else{
    echo "  
    <script>
    alert('Semangka tidak ada didalam Array buah');
    </script>
    ";
}
?>