<?php
class mahasiswa{
    
// Menampilkan semua data mahasiswa
public static function fetchAll(){
    global $pdo;
    $sql = "SELECT * FROM mahasiswa ORDER BY nim ASC";
    $stmt= $pdo->query($sql);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// Menampilkan data berdasarkan ID
public static function find($id){
    global $pdo;
    $sql = "SELECT * FROM mahasiswa WHERE id=:id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id'=>$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

// Menambah data kedalam database
public static function create($id, $nama, $nim, $kelas, $prodi, $fakultas){
    global $pdo;
    $sql = "INSERT INTO mahasiswa (id, nama, nim, kelas, prodi, fakultas) VALUES (:id, :nama, :nim, :kelas, :prodi, :fakultas)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id'=>$id, 'nama'=>$nama, 'nim'=>$nim, 'kelas'=>$kelas, 'prodi'=>$prodi, 'fakultas'=>$fakultas]);
   
}

// Mengupdate data yang telah ada berdasarkan id
public static function update ($id, $nama, $nim, $kelas, $prodi, $fakultas){
global $pdo;
$sql = "UPDATE mahasiswa SET id=:id, nama=:nama, nim=:nim, kelas=:kelas, prodi=:prodi, fakultas=:fakultas WHERE id=:id";
$stmt = $pdo->prepare($sql);
$stmt->execute(['nama'=>$nama, 'nim'=>$nim, 'kelas'=>$kelas, 'prodi'=>$prodi, 'fakultas'=>$fakultas, 'id'=>$id]);

}

// Menghapus data berdasarkan id-data
public static function delete($id){
    global $pdo;
    $sql = "DELETE FROM mahasiswa WHERE id=:id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id'=>$id]);
    
}

}
?>