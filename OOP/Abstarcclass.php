<?php
// abstract class namaclass{}  =>(Tidak dapat dibuat instance hanya dapat di extends dengan child classnya dan semua method dan properties yang dimiliki oleh parents abstract class tersebut harus ada juga didalam child class nya sesuai dengan nama dari method atau properties yang ada pada parents class abstract yang di extends nya);

abstract class Buku{
    abstract public function setNama($nama);
    abstract public function getNama();
}
class novel extends Buku{
   public  $nama;

    public function setNama($nama){
        $this->nama=$nama;
    }
    public function getNama(){
       return $this->nama;
    }
}

$novel = new novel();
$novel->setNama("Harry-Potter");
echo $novel->getNama();  // Harry-Potter

?>
