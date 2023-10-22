<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

<?php
    $user = $_POST ["usuario"];
    $pass = $_POST ["pass"];

    $checkUser = "admin";
    $checkPass = "1234";

    if ($user == $checkUser && $pass == $checkPass) {
        header ("location: https://plataforma.potrerodigital.org/user/login");
    } else {
        header ("location: https://web.page/awesome/pixars-404-page/");
    }
    ?>