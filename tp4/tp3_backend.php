<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Bucles</title>
</head>
<body>

<header>

        <h1> Estructuras de Control.  <small class="text-body-secondary"> Accettura, MC. </small> </h1> 

</header>

<div class="accordion" id="accordionExample">
    
<div class="accordion-item">
        <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
        Numeros del 1 al 100
        </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
        <div class="accordion-body">
        <strong>Este es un bucle WHILE...</strong>
<?php
$i = 1;
while ($i <=100 ) {
    print "<p> $i ) estoy en un bucle while.. </p>";
    $i++;
}
?>
        </div>
    </div>
</div>

<div class="accordion-item">
        <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Numeros del 100 al 1
        </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
        <div class="accordion-body">
        <strong>Este es un bucle WHILE...</strong>
<?php
$i = 100;
while ($i >=1 ) {
    print "<p> $i ) estoy en un bucle while.. </p>";
    $i--;
}
?>

        </div>
    </div>
</div>


<div class="accordion-item">
        <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Números pares del 1 al 100.
        </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
        <div class="accordion-body">
        <strong>Este es un bucle FOR...</strong>

<?php
for ($i = 2; $i <= 100; $i+=2) {
    print "<p> $i ) estoy en un bucle for... </p>";
}

?>

        </div>
    </div>
</div>

<div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
      Números impares del 1 al 100.
      </button>
    </h2>
    <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>Números impares del 1 al 100.</strong>

        <?php
for ($i = 1; $i <= 100; $i+=2) {
    print "<p> $i ) estoy en un bucle for... </p>";
}

?>

      </div>
    </div>
  </div>


  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
      Suma de los números de 1 a 20
      </button>
    </h2>
    <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>Suma de los números de 1 a 20</strong>

        <?php
$i = 1;
$j = 2;
$k = $i + $j;
do {
    print "<p> la suma de las variables $i + $j = $k </p>";
    $i++;
    $j++;
    $k = $i + $j;
} while ($j <=20);

?>

      </div>
    </div>
  </div>


  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
      Suma de números pares de 1 a 20
      </button>
    </h2>
    <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>Suma de números pares de 1 a 20</strong>

        <?php
$i = 2;
$j = 2;
$k = $i + $j;
do {
    print "<p> la suma de las variables $i + $j = $k </p>";
    $i+=2;
    $j+=2;
    $k = $i + $j;
} while ($j <=20);

?>


      </div>
    </div>
  </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" > </script>

</body>
</html>