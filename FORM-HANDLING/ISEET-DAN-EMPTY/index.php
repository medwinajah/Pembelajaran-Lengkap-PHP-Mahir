<?php

// Menggunakan empty(); 
if(!empty($_POST["username"]) && !empty($_POST['gmail'])){
    $username=$_POST['username'];
echo "
<script>
alert('Selamat datang $username');
</script>
";
}else{
    echo "
    <script>
    alert('Silahkan login dahulu ya!');
    document.location.href='index.html';
    </script>
    ";
}

//  //Menggunakan isset();
//  if(isset($_POST["username"])){
//     $username=$_POST['username'];
//     echo "Hallo $username";
//  }else{
//     $errors[]="Fild nama tidak ditemukan";
//  }
?>