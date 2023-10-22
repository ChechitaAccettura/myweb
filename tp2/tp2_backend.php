<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css
">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <title>Estructuras de control </title>
</head>
<body class="container p1">
<br>
<div class="h1">
Estructuras de Control. <small class="text-body-secondary"> Accettura, MC. </small>
</div>
<br>
<!-- 1. Crear una variable n y validar que sea un número positivo. 
    Crear dos variables, una con nombre numero1 y otra con el nombre de numero2. -->
<?php
    $numeroDado = 18;
    $numero1 = 50;
    $numero2 = 45;
    if ($numeroDado > 0){
        echo ("<div class='h3'>  La variable indicada es un número positivo. </div>");
    } else if ($numeroDado < 0) {
        echo ("<div class='h3'>  La variable indicada es un número negativo. </div>");
    } else {
        echo ("<div class='h3'>  La variable indicada NO es un número. </div>");
    }
?>
<!--2. Validar que sea un número mayor a 1 y menor a 10.-->
<?php
    if ($numeroDado > 1 & $numeroDado < 10){
        echo ("<div class='h4'>  El número dado está en el rango entre 1 y 10. </div>");
    } else {
        echo ("<div class='h4'>  El número dado está fuera de rango. </div>");
    }?>
<!--3. Validar que sea un número mayor a 10 o menor a 2.-->

<?php
    if ($numeroDado > 10 || $numeroDado < 2){
        echo ("<div class='h5'> El número dado es mayor que 10 o menor que 2 </div>");
    } else {
        echo ("<div class='h5'> El número dado está dentro del rango entre 2 y 10 </div> ");
    }
?> <br>
<!--4. Si numero1 es mayor a numero2, mostrar por pantalla, la suma y la resta. 
    Si numero2 es mayor a numero1, mostrar por pantalla la multiplicación, la división entera y el resto de la división. 
    Si numero1 y numero2 son iguales, mostrar el siguiente mensaje “Los números ingresados son iguales”.-->
    <div class='lead'>
<?php
    if ($numero1 > $numero2) {
        echo ('La suma de las dos variables es = '. $numero1 + $numero2 . '</br>' . 'La resta de las dos variables es = ' . $numero1 - $numero2);
    } else if ($numero1 < $numero2) {
        echo ('La multiplicación de las dos variables es = ' . $numero1 * $numero2 . '</br>' . 'La división de las dos variables es =  ' . round($numero1 / $numero2, 0));
    } else {
        echo ("Los números ingresados son iguales");
    }
?>
    </div>

</body>
</html>