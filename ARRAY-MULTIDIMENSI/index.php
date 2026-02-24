<?php
$buah=[
["Semangka",10000,"Manis"],
["Alpukat",20000,"Manis"],
["Jeruk",5000,"Manis"],
["Coklat",12000,"Manis"]
];

echo($buah[0][0]); // Semangka

echo "<br>";

foreach($buah as $buahan){
    echo $buahan[0]." = ".$buahan[2]. "<br>"; // Semangka Alpukat Jeruk Coklat 
}
?>