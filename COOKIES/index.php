<?php
// Membuat cookie
setcookie("kunci","medwin",time()+86400*30);
setcookie("username","medwin",time()+3600*24);

// Menghapus cookie
setcookie("username",'',time()-3600);

// Memeriksa apakah cookie ada
if(isset($_COOKIE["kunci"]) && $_COOKIE["username"]){
    echo $_COOKIE["kunci"].$_COOKIE["username"];
}


?>