<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

<?php
    $user = $_POST ["usuario"];
    $pass = $_POST ["pass"];

    $checkUser = "admin";
    $checkPass = "1234";

    if ($user == $checkUser && $pass == $checkPass) {
        header ("location: administrar.php");
    } else {
        header ("location: login2.html");
    }
    ?>