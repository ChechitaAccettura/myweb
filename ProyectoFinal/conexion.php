<?php
//**  
// $hostname = "sql112.infinityfree.com";
// $username = "if0_35466387";
// $password = "XZCxyd88pHJ";
// $database = "if0_35466387_tiendagabita";

// $conexion = mysqli_connect ($hostname, $username, $password, $database);
// mysqli_set_charset($conexion, "utf8");

// if(!$conexion) {
// die("Error de conexión: " . mysqli_connect_error());

$conexion = mysqli_connect("127.0.0.1", "root", "");
mysqli_select_db($conexion, "gabitas");
?>