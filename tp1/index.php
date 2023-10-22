<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Tp -  Accettura❤️</title>
</head>
<body>

<!-- CONSIGNAS TP N1 -->

<!-- 1 -->

</br>
<div class="h1"> 
    <?php
    echo ("Hola Mundo");
    ?>
</div>
</br></br>

<!-- 2 -->
<div class="display-4"> 
    <?php
    $Saludo = "Hola Mundo";
    echo $Saludo;
    ?>
</div>
</br></br>

<!-- 3-->
    <?php
    $num1 = 24;
    $num2 = 8;
    ?>
    <div class="lead"> 
    <?php
    echo ("El resultado de la Suma de las dos variables es = ". $num1 + $num2); 
    ?>
    </div>
    <div class="lead"> 
    <?php
    echo ("El resultado de la Resta de las dos variables es = ". $num1 - $num2);
    ?>
    </div>
    <div class="lead"> 
    <?php
    echo ("El resultado de la Multiplicación de las dos variables es = ". $num1 * $num2);
    ?>
    </div>
    <div class="lead"> 
    <?php
    echo ("El resultado de la División de las dos variables es = ". $num1 / $num2);
    ?>
    </div>
    </br></br>

<!-- 4 -->
<p class="text-nowrap bg-body-secondary border"><strong>
<?php   
    $grados = 20;
    $celsius_a_fahrenheit = $grados * (9/5) + 32;
    echo ("La conversión de 20° C es igual a = ". $celsius_a_fahrenheit. "°F");
?>
</strong></p>

<!-- 5 
a) Calcular el perímetro y el área de un rectángulo, dado que su base es 18cm y su altura 12cm.
b) Calcular el perímetro y el área de un círculo dado que su radio es de 30cm.-->
<div class="display-6"> 
<?php

// Rectangulo 

$fig_1Base = 18;
$fig_1Altura = 12;

// Círculo 

$fig_2Radio = 30;
$fig_2Area = round ((pi() * $fig_2Radio**2), 2 );
$fig_2Perimetro = round ((pi() * $fig_2Radio * 2), 2);

// Rectangulo  

echo ("El perímetro del rectángulo dado es igual a ". $fig_1Altura*2 + $fig_1Base*2 . " cm");
?>
</div>
</br>
<div class="display-6"> 
<?php
echo ("La superficie del rectángulo dado es igual a ". $fig_1Altura * $fig_1Base . " cm ²");
?>
</div>
</br>

<div class="display-6"> 
<?php
echo ("El perímetro del círculo dado es igual a ". $fig_2Perimetro . " cm");
?>
</div>
</br>

<div class="display-6"> 
<?php
echo ("La superficie del círculo dado es igual a ". $fig_2Area . " cm ²");
?>
</div>

<!-- FIN by Chechita 🦋--> 

</body>
</html>