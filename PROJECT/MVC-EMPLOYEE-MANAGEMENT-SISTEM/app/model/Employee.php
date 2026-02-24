<?php
class Employee{

// function show alls data
public static function fetchAll(){
    global $pdo;
$sql = "SELECT * FROM employess";
$stmt=$pdo->query($sql);
return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// function select data using id and show one data
public static function find($id){
    global $pdo;
    $sql = "SELECT * FROM employess WHERE id=:id";
    $stmt =$pdo->prepare($sql);
    $stmt->execute(['id'=>$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

// function insert data to-databases
public static function create($name, $address, $salary){
    global $pdo;
$sql = "INSERT INTO employess (name,address,salary) VALUES (:name, :address, :salary)";
$stmt= $pdo->prepare($sql);
$stmt->execute(['name'=>$name, 'address'=>$address, 'salary'=>$salary]);

}

// function update data where id or using id
public static function update($id, $name, $address, $salary){
    global $pdo;
    $sql = "UPDATE employess SET name=:name, address=:address, salary=:salary WHERE id=:id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['name'=>$name, 'address'=>$address, 'salary'=>$salary, 'id'=>$id]);
}

public static function delete($id){
    global $pdo;
    $sql = "DELETE FROM employess WHERE id=:id";
    $stmt=$pdo->prepare($sql);
    $stmt->execute(['id'=>$id]);
}
}
?>