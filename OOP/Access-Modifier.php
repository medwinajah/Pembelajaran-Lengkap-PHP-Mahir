<?php
class Produk{
    // private (Hanya bisa diakses di class itu sendiri dan jika ada instance nya diakses dengan menggunakan method seter dan geter);

    // protected (Hanya bisa diakses di class itu sendiri dan juga class turunan-Nya (Extends / Pewarisan));

    // public (Dapat di akses dimana saja);

    public $nama;  // public
    protected $harga; // protected
    private $stok;  //private


    // Method seter untuk stok
    public function setStok($stok){
        $this->stok=$stok;
    }

    // Method getter untuk stok
    public function getStok(){
        return $this->stok;
    }

    public function tambahStok($tambah){
        $hasil=$this->stok+$tambah;
        $this->stok=$hasil;
    }

    public function kurangiStok($stok){
        if($this->stok <$stok){
            echo "Stok tidak mencukupi";
        }else{
        $hasil=$this->stok-$stok;
        $this->stok=$hasil;
        }
        
    }

}

$produk=new Produk();
$produk->nama="Laptop";
$produk->setStok(50);
echo $produk->getStok(); // 50
$produk->tambahStok(20);
echo "<br>";
echo $produk->getStok(); // 70
echo "<br>";
$produk->kurangiStok(30);
echo $produk->getStok(); //40




?>