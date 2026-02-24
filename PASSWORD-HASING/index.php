<?php
$password = "Manusia hebat";
$hashed_password = password_hash($password,PASSWORD_BCRYPT);

// Verifikasi kesesuaian password
if(password_verify($password,$hashed_password)){
    echo 'Password is valid';  // true (this checked)
}else{
    echo 'Invalid password';
}
?>