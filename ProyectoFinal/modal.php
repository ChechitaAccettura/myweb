<?php
// 1) Conexion
// a) realizar la conexion con la bbdd
// b) seleccionar la base de datos a usar
include('conexion.php');

// 2) Almacenamos los datos del envío GET
// a) generar variables para el id a utilizar
$id = $_GET["id"];

$consulta = "SELECT * FROM tiendagabita WHERE id=$id";

$datos=mysqli_query($conexion, $consulta);
$registro=mysqli_fetch_array($datos);
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
    <title>Gabita's Producto </title>
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
                        <li><a href="acercade.html" class="dropdown-item" target="_blank" type="button">Sobre Gabita</a></li>

                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
</header>

<div class="card mb-3" style="width: 99%; min-height: 60vh;">
    <div class="row g-0">
    <div class="col-md">
    </div>
        <div class="col-md">
        <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img  class="img-fluid" src="data:image/png;base64,<?php echo base64_encode($registro['imagen_1'])?>" alt="img" width="250px" height="250px">
            </div>
            <div class="carousel-item">
                <img  class="img-fluid" src="data:image/png;base64,<?php echo base64_encode($registro['imagen_2'])?>" alt="img" width="250px" height="250px">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>
        </div>
        <div class="col-md">
            <div class="card-body">
                <h5 class="card-title"><?php echo $registro['producto']; ?></h5>
                <p class="card-text"><?php echo "Código de producto:  " . $registro['id']; ?></p>
                <p class="card-text"><small class="text-body-secondary"><?php echo $registro['categoria']; ?></small></p>
                <p class="card-text"><small class="text-body-secondary"><?php echo "Tamaños disponibles: " . $registro['size_']; ?></small></p>
                <h5 class="card-title"><?php echo '$' . $registro['precio']; ?></h5>
                <a type="submit" class="btn btn-info" href="index.php">Volver al inicio</a>
                <a type="submit" class="btn btn-danger" target="_blank" href="https://link.mercadopago.com.ar/gabitasworld">Pagar</a>
            </div>
        </div>
        <div class="col-md">
    </div>
    </div>
    </div>

    <aside class="what" >

    <a href="https://api.whatsapp.com/send/?phone=5492234385407&text=Saludos!%20Quisiera%20consultar%20por%20un%20producto%20que%20vi%20en%20tu%20tienda%20virtual..." type="button" target="_blank">
        <img id="what_img" src="assets/whatsapp.png" alt="whatsap">
    </a>

</aside>


<footer class="container-fluid p-4 text-center">
    <a class="footericon" target="_blank" href="https://www.instagram.com/gabitasworld/">
    <i class="fa-brands fa-instagram"></i>
    </a>
    <a class="footericon" target="_blank" href="https://www.facebook.com/gabriela.lazzurri">
    <i class="fa-brands fa-facebook-f"></i>
    </a>
    <a class="footericon" target="_blank" href="https://www.tiktok.com/@gabrielalazzurri?_r=1&_d=e5iij3b1a48ca5&sec_uid=MS4wLjABAAAAUWU0y57nciNVzxqUQExZPMjYqsgW4-O7bqldZWIqbKDv-X5g21KbWhOGGlOUz-Tu&share_author_id=199752964465565696&sharer_language=es&source=h5_m&u_code=dbfahg4i3d68hd&timestamp=1699967677&user_id=6808271874285126662&sec_user_id=MS4wLjABAAAAENGlyDAoDpzKNv5xL2Mnj6EFegjE1yA73apeqa9bSpE4M-TrJgmM9mccuZ9EgkI2&utm_source=whatsapp&utm_campaign=client_share&utm_medium=android&share_iid=7299773767924205318&share_link_id=6f386b13-4afc-40b3-9605-b4638ad0c0d9&share_app_id=1233&ugbiz_name=ACCOUNT&ug_btm=b5470%2Cb5836&social_share_type=5 ">
      <i class="fa-brands fa-tiktok"></i>    </a>
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>