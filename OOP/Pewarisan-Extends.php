<?php
// Parent class
class Hewan{
    public $nama;

    public function setNama($nama){
        $this->nama=$nama;
    }

    public function getNama(){
        return $this->nama;
    }
}

// Child class
class Anjing Extends Hewan{
public function suara(){
    echo " Guk....Guk...Guk....Guk";
}
}

$anjing= new Anjing();
$anjing->setNama("Jipul");

echo $anjing->getNama()." Berkata : ";
echo $anjing->suara();

?>