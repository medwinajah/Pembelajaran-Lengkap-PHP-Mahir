<?php
if(!filter_var($_POST["nama"],FILTER_VALIDATE_EMAIL)){
    $name=$_POST['nama'];
    echo "
    <script>
    alert('Hallo $name');
    </script>
    ";
}
?>