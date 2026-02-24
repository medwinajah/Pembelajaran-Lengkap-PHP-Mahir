<?php
require_once '../model/Employee.php';
class Employeecontroller{

    // Menampilkan daftar karyawan
    public function index(){
        $employess = Employee::fetchAll();
        include 'view/Employess/index.php';
    }

    // Menampilkan form tambah karyawan
    public function create(){
        include 'view/Employess/create.php';
    }

    // Menyimpan data karyawan baru
    public function save(){
        $name = $_POST['name'];
        $address = $_POST['address'];
        $salary = $_POST['salary'];      
        Employee::create($name, $address, $salary);
        header("Location: index.php");
    }

    // Menampilkan form edit
    public function edit($id){
        $employee=Employee::find($id);
        include 'view/Employess/update.php';
    }

    // Mengupdate data karywan
    public function update($id){
        $name = $_POST['name'];
        $address = $_POST['address'];
        $salary = $_POST['salary'];
        Employee::update($id, $name, $address, $salary);
        header("Location: index.php");
    }

    // Menghapus data karyawan
    public function delete($id){
     Employee::delete($id);
     header("Location: index.php");
    }
}
?>