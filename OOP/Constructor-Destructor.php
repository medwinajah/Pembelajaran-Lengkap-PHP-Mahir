<?php
class mobils{
    public $nama;

    // constructor (function yang pertama kali dan otomatis dijalankan pada saat instances object)=> public function __construct($parameter){$this->parameter=$parameter};

    public function __construct($nama)  
    {
        $this->nama=$nama;
    }

    public function getNama(){
        return $this->nama;
    }

    //destruct() => (Adalah function yang dijalankan ketika sebuah object dihapus atau skrip selesai dieksekusi)
    public function __destruct()
    {
       echo "Ini adalah kode dari function __destrcut()";
    }


}

$mobils=new mobils("Avanza");
echo $mobils->getNama();
echo "<br>"; 
//output => Avanza  => Pertama dirun
//          Ini adalah kode dari function __destrcut() => Dirun setelahnya;
?>