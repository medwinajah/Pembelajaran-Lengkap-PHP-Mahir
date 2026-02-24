<?php
class Hewans{
    protected $nama;

public function setNama($nama){
    $this->nama=$nama;
}

public function getNama(){
    return $this->nama;
}

public function Bersuara(){
    echo " : Hewan bersuara <br> ";
}
}

class Kucing extends Hewans{
    // Override
    public function Bersuara(){
        echo " : Meong....Meong....Meong....Meong <br>";
    }
}

$hewan = new Hewans();
$hewan->setNama("Anjing");
echo "<br>".$hewan->getNama();
echo $hewan->Bersuara();
$kucing = new Kucing();
$kucing->setNama("Kucing");
echo "<br>".$kucing->getNama();
echo $kucing->Bersuara();

?>