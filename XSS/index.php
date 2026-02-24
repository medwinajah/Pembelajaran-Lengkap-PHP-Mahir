<?php
if($_SERVER("REQUEST_METHOD") == "POST"){
    $username=htmlspecialchars($_POST["username"]);
    $email=htmlspecialchars($_POST["email"]);

    echo "
    <script>
    alert('Username : $username Email: $email');
    </script>
    ";
}
?>