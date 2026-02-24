<?php
// Menggubakan filter_var($yang_diperiksa ,FILTER_VALIDATE_EMAIL); (Untuk memvalidasi sebuah email);
if(!filter_var($_POST["gmail"],FILTER_VALIDATE_EMAIL)){
    echo "
    <script>
    alert('Gmail Tidak Valid ya, isi ulang bisa ya.');
    document.location.href='index.html';
    </script>
    ";
}else{
    $gmail=$_POST['gmail'];
    echo "
    <script>
    alert('Gmail yang dikirim: $gmail.');
    </script>
    ";
}
?>