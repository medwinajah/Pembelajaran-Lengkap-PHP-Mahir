<?php
// foreach($_SERVER as $key=>$value){
//        echo $_SERVER["PHP_SELF"];
// }
// echo $_SERVER["PHP_SELF"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM ACTION</title>
</head>
<body>
   <form action="<?= $_SERVER["PHP_SELF"]; ?>" method="post">
    <label for="nama">Nama</label>
    <input type="text" name="nama" id="nama" required autocomplete="off">
    <label for="email">Email</label>
    <input type="email" name="email" id="email">
    <button name="submit" type="submit">Submit</button>
   </form> 
</body>
</html>

<?php
if(isset($_POST["nama"]) && $_POST["email"]){
    $nama=$_POST["nama"];
    $email=$_POST["email"];
    echo "$nama $email";
}

// echo $_SERVER["REQUEST_METHOD"];  //Memeriksa method yang digunakana pada acition pada form
?>