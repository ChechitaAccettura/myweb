<!DOCTYPE html>
<html lang="es" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/020c2b5f5e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Tienda Accettura</title>
</head>
<body>
<h1>Tu próximo outfit</h1>
<br>
    <p>Modificá tu tienda virtual desde esta página...</p>

    <?php
    // 1) Conexion
    $conexion = mysqli_connect("127.0.0.1", "root", "");
    mysqli_select_db($conexion, "tienda");


    // 2) Preparar la orden SQL
    // Sintaxis SQL SELECT
    // SELECT * FROM nombre_tabla
    // => Selecciona todos los campos de la siguiente tabla
    // SELECT campos_tabla FROM nombre_tabla
    // => Selecciona los siguientes campos de la siguiente tabla
    $consulta='SELECT * FROM ropa';

    // 3) Ejecutar la orden y obtenemos los registros
    $datos= mysqli_query($conexion, $consulta);

    // configurar 

    /*nueva forma con foreach
    while ($reg=mysqli_fetch_array($datos, MYSQLI_ASSOC)){
      foreach ($reg as $key => $value) {
        print ("<p>$key: $value</p>\n");
      };
    };*/

    // 4) Mostrar los datos del registro

    ?>
    <div class="container"> 
    <?php
  
while ($registro=mysqli_fetch_array($datos)) { ?>

<div class="card mb-3" style="width: 540px;">
      <div class="row g-0">
        <div class="col-md-4">
        <img  class="img-fluid" src="data:image/png;base64,<?php echo base64_encode($registro['imagen'])?>" alt="img" width="250px" height="250px">
        </div>
        <div class="col-md-6">
          <div class="card-body">
            <h5 class="card-title"><?php echo $registro['prenda']; ?></h5>
            <p class="card-text"><?php echo "Código de producto:" . $registro['id']; ?></p>
            <p class="card-text"><small class="text-body-secondary"><?php echo $registro['marca']; ?></small></p>
            <p class="card-text"><small class="text-body-secondary"><?php echo $registro['talle']; ?></small></p>
            <h5 class="card-title"><?php echo '$' . $registro['precio']; ?></h5>
            
          </div>
        </div>
        <div class="col-md-2">
        <a type="submit" class="btn btn-danger" href="borrar.php?id=<?php echo $registro['id'];?>">Borrar</a>
        <a type="submit" class="btn btn-info" href="modificar.php?id=<?php echo $registro['id'];?>">Modificar</a>

        </div>
      </div>
    </div>
    <?php } ?>
    </div>
  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>
