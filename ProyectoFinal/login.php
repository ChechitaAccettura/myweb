<?php
    $user = $_POST ["usuario"];
    $pass = $_POST ["pass"];

    $checkUser = "Lazzurri_2023TCD";
    $checkPass = "Todas con demencia";

    if ($user == $checkUser && $pass == $checkPass) {
        header ("location: administrar.php");
    } else {
        header ("location: login2.html");
    }
    ?>