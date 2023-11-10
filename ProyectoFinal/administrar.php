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
    <title>Modificar Tienda </title>
</head>
<body>
<?php

/*  ---CONEXION CON LA BASE DE DATOS--- */

    $conexion = mysqli_connect("127.0.0.1", "root", "");
    mysqli_select_db($conexion, "gabitas");

    $consulta='SELECT * FROM tiendagabita';

    $datos= mysqli_query($conexion, $consulta);
?>
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
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
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
                    <a class="nav-link" href="/myweb/ProyectoFinal/amigurumis.php">Amigurumis</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/myweb/ProyectoFinal/prendas.php">Prendas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/myweb/ProyectoFinal/accesorios.php">Accesorios</a>
                </li>
                <li class="nav-item justify-content-md-end">
                    <a href="login.html" class="nav-link" type="button">Acceso a Administradores</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Más
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Videos</a></li>
                        <li><a class="dropdown-item" href="#">Suscribirse</a></li>
                        
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

</header>

<div class="container-fluid header_2">
    <h3> Modificá tus productos aquí <i class="fa-solid fa-floppy-disk"></i></h3>
</div>

<div class="container"> 
    <?php
  
while ($registro=mysqli_fetch_array($datos)) { ?>

<div class="card mb-3" style="width: 420px;">
      <div class="row g-0">
        <div class="col-md-4">
        <img  class="img-fluid" src="data:image/png;base64,<?php echo base64_encode($registro['imagen_1'])?>" alt="img" width="250px" height="250px">
        </div>
        <div class="col-md-5">
          <div class="card-body">
            <h5 class="card-title"><?php echo $registro['producto']; ?></h5>
            <p class="card-text"><?php echo "Código de producto:  " . $registro['id']; ?></p>
            <p class="card-text"><small class="text-body-secondary"><?php echo $registro['categoria']; ?></small></p>
            <p class="card-text"><small class="text-body-secondary"><?php echo "Tamaños disponibles: " . $registro['size']; ?></small></p>
            <h5 class="card-title"><?php echo '$' . $registro['precio']; ?></h5>
            
          </div>
        </div>
        <div class="col-md-3">
            <a type="submit" class="btn btn-danger" href="borrar.php?id=<?php echo $registro['id'];?>">Borrar</a>
            <a type="submit" class="btn btn-info" href="modificar.php?id=<?php echo $registro['id'];?>">Modificar</a>
        </div>
      </div>
    </div>
    <?php } ?>
    </div>

<footer>

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body> 
</html>