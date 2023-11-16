<?php
    $user = $_POST ["usuario"];
    $pass = $_POST ["pass"];

    session_start();
    $_SESSION["usuario"]=$user; /*guardo el nombre del usuario en una variable*/

    $checkUser = "GabrielaLazurri_2023";
    $checkPass = "TodasConDemencia_";

    if ($user == $checkUser && $pass == $checkPass) {
        header ("location: administrar.php");
    } else {
        header ("location: login2.html");
    }
    ?>