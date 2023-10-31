<!DOCTYPE html>
<html lang="es" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/020c2b5f5e.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Tienda Accettura</title>
</head>
<body>
    <h1>Tu próximo outfit</h1>

    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        Elegí qué estás buscando...
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="http://localhost/myweb/tp6-consulta/listBuzo.php"> Buzos</a></li>
            <li><a class="dropdown-item" href="http://localhost/myweb/tp6-consulta/listExpensive.php">Productos +$500</a></li>
            <li><a class="dropdown-item" href="http://localhost/myweb/tp6-consulta/listNike.php">Especial NIKE </a></li>
        </ul>
    </div>
    <p>La siguiente lista muestra los productos en stock que encontramos para tu búsqueda</p>
    <table class="table">
    <tr>
        <th>ID</th>
        <th>TIPO DE PRENDA</th>
        <th>MARCA</th>
        <th>TALLE</th>
        <th>PRECIO</th>
        <th></th>
        <th></th>
    </tr>
    <?php
    // 1) Conexion
    $conexion=mysqli_connect("127.0.0.1","root","");
    mysqli_select_db($conexion,"tienda");
    

    // 2) Preparar la orden SQL
    // Sintaxis SQL SELECT
    // SELECT * FROM nombre_tabla
    // => Selecciona todos los campos de la siguiente tabla
    // SELECT campos_tabla FROM nombre_tabla
    // => Selecciona los siguientes campos de la siguiente tabla

    $consulta= "SELECT*FROM ropa";
    
    // 3) Ejecutar la orden y obtenemos los registros

    $datos= mysqli_query ($conexion, $consulta);

    // 4) Mostrar los datos del registro

    while ($registro =mysqli_fetch_array($datos)) { ?>
        <tr>
        <td><?php echo $registro['id']; ?></td>
        <td><?php echo $registro['prenda']; ?></td>
        <td><?php echo $registro['marca']; ?></td>
        <td><?php echo $registro['talle']; ?></td>
        <td><?php echo '$'. $registro['precio']; ?></td>
        <td><img class="img-thumbnail rounded mx-auto d-block" src="data:image/jpg;base64, <?php echo base64_encode($registro['imagen'])?>" alt="" width="200px" height="200px"> </td>
        <td> <img class="img-thumbnail rounded mx-auto d-block" src="<?php echo $registro['imagen2']; ?>" alt="otraImagen"  width="200px" height="200px"> </td>
        </tr>
    <?php } ?>
    </table>
    <div class= "container-fluid">
        <a class="col-12 btn btn-secondary" href="http://localhost/myweb/tp6-consulta/listall.php" width="90%"> Volver</a>

        <footer class="container-fluid">
            <ul>
                <a target="_blank" class="dropdown-item icon-link-hover" href="https://github.com/ChechitaAccettura/myweb"> <i class="fa-brands fa-github"> </i> Cecilia Accettura </a>
                <a target="_blank" class="dropdown-item icon-link-hover" href="https://plataforma.potrerodigital.org/panel/alumno"><i class="fa-solid fa-chalkboard-user"> </i>Potrero Digital</a>
                <li class="dropdown-item"><i class="fa-regular fa-registered"></i> Todos los derechos reservados</li>
            </ul>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
