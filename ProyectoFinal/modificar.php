<?php
    include('conexion.php');
    $id=$_GET["id"];

    $consulta="SELECT * FROM tiendagabita WHERE id=$id";
    $respuesta=mysqli_query($conexion, $consulta);

    $datos=mysqli_fetch_array($respuesta);
    $producto=$datos['producto'];
    $categoria=$datos['categoria'];
    $size_=$datos['size_'];
    $precio=$datos['precio'];
    $imagen_1=$datos['imagen_1'];

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keyword" content="#gabitas #gabitas%20world #gabita's #gabita's%20world #crochet #tejido #amigurumis">
    <script src="https://kit.fontawesome.com/020c2b5f5e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="icon" href="assets/castle.svg">
    <title>Gabita's Modifica Producto</title>
</head>
<body>

<header>
<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <p class="headerP"> <img class="imagenCarousel" src="assets/logo.png" alt="logo">Gabitas's World</p>
        </div>
        <div class="carousel-item">
            <p class="headerP"><img class="imagenCarousel col" src="assets/ovillo.png" alt="ovillo"> Tutoriales</p>
        </div>
        <div class="carousel-item">
                        <p class="headerP"> <img class="imagenCarousel" src="assets/heartwool.png" alt="heartwool"> Amigurumis </p>
        </div>
        <div class="carousel-item">
            <p class="headerP"><img class="imagenCarousel" src="assets/tshirt.png" alt="tshirt"> Prendas </p>
        </div>
        <div class="carousel-item">
            <p class="headerP"> <img class="imagenCarousel" src="assets/bolso.png" alt="bolso"> Accesorios </p>
        </div>
    </div>
</div>

<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="index.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="amigurumis.php">Amigurumis</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="prendas.php">Prendas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="accesorios.php">Accesorios</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Más
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="login.html" class="dropdown-item" target="_blank" type="button">Acceso a Administradores</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

</header>


<div class="container-fluid header_2">
    <h3>Ingresá los nuevos datos del producto <i class="fa-solid fa-wrench"></i></h3>
</div>

<div class="row">
<div class="container-fluid row gap-3"> 

    <div class="col"> </div>
    <div class="col ">
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="assets/feria1.jpg" class="d-block w-100" alt="feria">
                </div>
                <div class="carousel-item">
                <img src="assets/feria3.jpg" class="d-block w-100" alt="feria">
                </div>
                <div class="carousel-item">
                <img src="assets/feria4.jpg" class="d-block w-100" alt="feria">
                </div>
            </div>

            </div>
    </div>

    <div class="col ">

<h5>Producto: <?php echo $id ?></h5>

<form action="" method="post" enctype="multipart/form-data">
<div class="row g-sm-2">
<label> Producto</label>
<input type="text" name="producto" placeholder="Producto" value="<?php echo $producto ?>">
</div>

<div class="row g-sm-2">
<label> Categoría</label>
<input type="text" name="categoria" placeholder="Categoría" value="<?php echo $categoria ?>">
</div>

<div class="row g-sm-2">
<label> Tamaños disponibles</label>
<input type="text" name="size_" placeholder="Tamaño" value="<?php echo $size_ ?>">
</div>

<div class="row g-sm-2">
<label> Precio</label>
<input type="text" name="precio" placeholder="Precio" value="<?php echo $precio ?>">
<!-- este no se va a mostrar por ahora
<label> Imagen</label>
<input type="file" name="imagen_1"> 
-->
</div>

<div class="row g-sm-2">
    <br>
    <br>
<button class="btn btn-primary" type="submit" name="guardarCambios"> Guardar Cambios </button>

<button class="btn btn-success" type="submit" name="cancelar" formaction="administrar.php"> Cancelar </button>
</div>

</form>

</div>

<div class="col"> </div>


<?php
if(array_key_exists('guardarCambios', $_POST)) {
    $producto = $_POST['producto'];
    $categoria = $_POST['categoria'];
    $size_ = $_POST['size_'];
    $precio = $_POST['precio'];

    $consulta = "UPDATE tiendagabita SET producto='$producto', categoria= '$categoria', size_= '$size_', precio= '$precio' WHERE id='$id'";
    mysqli_query($conexion, $consulta);

    echo '<script>location.replace("administrar.php"); </script>';
} ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body> 
</html>