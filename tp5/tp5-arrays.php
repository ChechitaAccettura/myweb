<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Array + foreach 🗒️</title>
</head>
<body>
  <!-- arrays -->  

  <header class="title">
      <h1>
      Arrays indexados, asociativos y uso de foreach 📌
      </h1>
  </header>

  <!-- 1. Almacenar en un array los 10 primeros números pares y mostrar en pantalla uno debajo del otro -->

  <div class="container-fluid">
    
    <div class="row"> 
      <div class="col"> 
<?php

$numerosPares = [2, 4, 6, 8, 10, 12, 14, 16, 18, 20];


Print "<h3> Los primeros 10 números pares mayores que 0 son: </h3>";

foreach ($numerosPares as $indice) {
  print "<p> $indice </p>";
};

?>
      </div>
<!-- 2. Crear un array e introducir los siguientes valores: Pedro, Ana, 34 y 1, sin asignar el índice de la
matriz. Mostrar el esquema del array con print_r(). -->
    <div class="col"> 
<?php

$arrayDatosVarios = ["Pedro", "Ana", 34, 1];

Print "<h3> Esquema de array <strong> arrayDatosVarios </strong>: </h3>";

print_r($arrayDatosVarios);

?>
      </div>
    </div>

<!-- 3. Crear un array asociativo e introducir los siguientes valores:
Nombre: Pedro
Apellido: Torres
Dirección: Av. Mayor 3703
Teléfono: 1122334455
-->
    <div class="row"> 
      <div class="col"> 
        
<?php

$datos = [
  'Nombre' => "Pedro",
  'Apellido' => "Torres",
  'Dirección' => "Av. Mayor 3703",
  'Teléfono' => 1122334455
];

print "<h3> ... Acá dice sólo crear y no muestra nada.... </h3>";
print "<img class='image' src='data:image/jpeg;base64,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' alt='ghosting'>";

?>
      </div>
<!-- 4. Crear un array introduciendo las ciudades: Madrid, Barcelona, Londres, New York, Los Ángeles y
Chicago, sin asignar índices al array. A continuación, muestra el contenido del array.
Ejemplo: La ciudad con el índice 0 tiene el nombre Madrid.
-->
      <div class="col">
<?php

$ciudades = ["Madrid", "Barcelona", "Londres", "New York", "Los Ángeles", "Chicago"];

print "<h3> Qué ciudades más bonitas...</h3>";
foreach ($ciudades as $indice => $valor) {
  print "<p>La ciudad con el índice $indice tiene el nombre $valor .</p>";
};


?>
      </div>
    </div>

<!-- 5. Repite el ejercicio anterior pero ahora se ha de crear índices, MD para Madrid, BCL para Barcelona,
LD para Londres, NY para New York, LA para Los Ángeles y CCG para Chicago.
Ejemplo: El índice de Madrid es MD. --> 
    <div class="row"> 
    <div class="col">
<?php

$ciudadesConIndice = [
  'MD' => "Madrid", 
  'BCL' => "Barcelona",
  'LD' => "Londres",
  'NY' => "New York",
  'LA' => "Los Ángeles",
  'CCG' => "Chicago"];


print "<h3> Más me gustan las ciudades con índices ...</h3>";
foreach ($ciudadesConIndice as $indice => $valor) {
  print "<p>El indice de $valor es = $indice. </p>";
};


?>

    </div>
<div class="col">
  <h3 class="title">
    Cecilia Accettura. <strong class="subtitle"> Back End. Clase Arrays indexados y asociativos. </strong>
  </h3> 
</div>
    </div>
  </div>
</body>
</html>