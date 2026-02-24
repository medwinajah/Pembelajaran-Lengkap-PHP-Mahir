<?php  
require_once 'model/mahasiswa.php';
class mahasiswacontroller{
    // Menampilkan semua data mahasiswa
public function index(){
$employess = mahasiswa::fetchAll();
include 'view/mahasiswa/index.php';
}

// Menampilkan form tambah data karywan
public function create(){
    include 'view/mahasiswa/create.php';
}

// Manambah data karyawan
public function save(){
    $id = htmlspecialchars($_POST['id']);
    $nama = htmlspecialchars($_POST['nama']);
    $nim = htmlspecialchars($_POST['nim']);
    $kelas = htmlspecialchars($_POST['kelas']);
    $prodi = htmlspecialchars($_POST['prodi']);
    $fakultas = htmlspecialchars($_POST['fakultas']);
    mahasiswa::create($id, $nama, $nim, $kelas, $prodi, $fakultas);
    header("Location: index.php");
}

// Membuka form edit data mahasiswa
public function edit($id){
    $employee = mahasiswa::find($id);
    include 'view/mahasiswa/update.php';
}

// Memperbaharui data mahasiswa
public function update(){
    $id = htmlspecialchars($_POST['id']);
    $nama = htmlspecialchars($_POST['nama']);
    $nim = htmlspecialchars($_POST['nim']);
    $kelas = htmlspecialchars($_POST['kelas']);
    $prodi = htmlspecialchars($_POST['prodi']);
    $fakultas = htmlspecialchars($_POST['fakultas']);
    mahasiswa::update($id, $nama, $nim, $kelas, $prodi, $fakultas);
    header("Location: index.php");
}

// Menghapus data mahasiswa
public function delete($id){
    mahasiswa::delete($id);
    header("Location: index.php");
}

}
?>