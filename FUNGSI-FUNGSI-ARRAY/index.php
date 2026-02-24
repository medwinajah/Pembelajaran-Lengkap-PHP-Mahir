<?php
// Array Biasa
$buah=['Semangka','Durian','Pepaya','Rambutan'];

// Array Multidimensi
$mobil=[
["Nama" => "Pajero Sport",
"Harga" => 500000000],
["Nama" => "Sigra",
"Harga" => 400000000],
["Nama" => "Lamorgini",
"Harga" => 16000000000],
["Nama" => "Ferari",
"Harga" => 10000000000],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <!-- Array Biasa -->
    <ul>
        <?php foreach($buah as $buahan): ?>          
            <li><?= $buahan; ?></li>
            <?php endforeach ?>
    </ul>
    <br>

    <!-- Array Multi dimensi -->
     <ol type="1">
        <?php foreach($mobil as $kendaraan): ?>
        <li>Nama Mobil : <?= $kendaraan["Nama"] ?></li>
        <li>Harga : Rp. <?= $kendaraan["Harga"] ?></li>
        <?php endforeach ?>
     </ol>

     <hr>

     <table border="1" cellspacing="0" cellpadding="8" style="background-color:rgb(16, 68, 141); color:white; border-color:white; width:100%;">
         <tr>
            <th>NAMA</th>
            <th>Harga</th>
        </tr>

            <?php foreach($mobil as $mobils):?>
        <tr>
            <td><?= $mobils["Nama"] ?></td>
            <td><?= $mobils["Harga"] ?></td>
        </tr>         
            <?php endforeach ?>
     </table>
</body>
</html>
