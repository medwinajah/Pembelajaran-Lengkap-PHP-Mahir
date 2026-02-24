<?php 

$result='';
if(isset($_POST["hitung"])){
    $angka1=htmlspecialchars($_POST["nom1"]);
    $angka2=htmlspecialchars($_POST["nom2"]);
    $operator=$_POST["operator"];

    if(is_numeric($angka1) && is_numeric($angka2)){
        switch($operator){
        case "add":
            $result=$angka1 + $angka2;
            break;
        
        case "subtract":
            $result=$angka1 - $angka2;
            break;
        
        case "multiply":
            $result=$angka1 * $angka2;
            break;
        
        case "divide":
            // if(!$angka2==0){
            // $result=$angka1 / $angka2;
            // }else{
            //     $result="Error : Pembagian dengan 0 tidak diperbolehkan";
            // }

            // Menggunakan ternary operator
            $angka2 !=0? $result=$angka1/$angka2 : $result= "Error : Pembagian dengan nol tidak diperbolehkan";
            break;
        }

    }
    else{
    echo "
    <script>
    alert('Inputan harus berupa angka');
    document.location.href='index.php';
    </script>
    ";
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KALKULATOR SEDERHANA</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
   <div class="container">

    <div class="container-label">
    <h1>Kalkulator</h1>
    <h2>Sederhana</h2>
    </div>

    <form action="index.php" method="post">
       <input type="text" name="nom1" placeholder="angka pertama" required autocomplete="off" value="<?= $angka1; ?>
       ">
       <input type="text" name="nom2" placeholder="angka kedua" required autocomplete="off" value="<?= $angka2; ?>
       ">

       <select name="operator" id="operator">

        <option <?= isset($_POST["operator"]) && $_POST["operator"]=='add'? "selected" : ''; ?> value="add" >Tambah</option>

        <option <?= isset($_POST["operator"]) && $_POST["operator"]=='subtract'? "selected" : ''; ?> value="subtract" >Kurang</option>

        <option <?= isset($_POST['operator']) && $_POST['operator']=='multiply' ? "selected" : '';  ?> value="multiply" >Kali</option>

        <option <?= isset($_POST["operator"]) && $_POST["operator"]=='divide' ? "selected" : ''; ?> value="divide" >Bagi</option>

       </select>
       <button type="submit" class="hitung" name="hitung">Hitung</button>
    </form>
    <div class="result">
        Hasil: <?= htmlspecialchars($result); ?>
    </div>
   </div> 
</body>
</html>