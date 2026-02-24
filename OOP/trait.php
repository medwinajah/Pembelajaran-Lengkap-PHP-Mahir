<?php

// trait namaTrait{}; => (Adalah mekanisme meminjam method yang ada didalamnya oleh class yang ingin menggunakannya dengan cara use namaTraid, maka semua method yang ada pada trait tersebut dapat digunakan oleh class yang use namaTraid tersebut);

trait Mobilsa{
public function Bergerak(){
   echo "Mobil bergerak Maju";
}
}

class kendaraans {
    use Mobilsa;
}

$mobil1 = new kendaraans();
$mobil1->Bergerak();  // Mobil bergerak maju;

?>