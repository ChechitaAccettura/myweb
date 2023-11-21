<?php

include('conexion.php');

$producto = $_POST['producto'];
$categoria = $_POST['categoria'];
$size_ = $_POST['size_'];
$precio = $_POST['precio'];
$imagen_1 = addslashes(file_get_contents($_FILES['imagen_1']['tmp_name']));
$imagen_2 = addslashes(file_get_contents($_FILES['imagen_2']['tmp_name']));

$consulta = "INSERT INTO tiendagabita (id, producto, categoria, size_, precio, imagen_1, imagen_2)
    VALUES ('', '$producto', '$categoria', '$size_', '$precio', '$imagen_1', '$imagen_2')";

mysqli_query($conexion,$consulta);
echo '<script>location.replace("administrar.php"); </script>';
?>