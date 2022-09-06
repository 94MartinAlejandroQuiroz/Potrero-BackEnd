<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<h1>TP n°1 Quiroz Martin Alejandro</h1>

<br>
<hr>
  <h3>Ejercicio 1</h3>
    <?php
    echo "Hola mundo";
    ?>

<br>
<hr>
  <h3>Ejercicio 2</h3>
    <?php
    $mensaje = "Hola mundo";
    echo $mensaje;
    ?>

<br>
<hr>
  <h3>Ejercicio 3</h3>
    <?php
    $num1 = 10;
    $num2 = 3;
    echo "La suma de $num1+$num2 es igual a ", $num1+$num2."<br>";
    echo "La resta de $num1-$num2 es igual a ", $num1-$num2."<br>";
    echo "La multiplicación de $num1*$num2 es igual a ", $num1*$num2."<br>";
    echo "La división entera de $num1/$num2 es igual a ", intdiv($num1, $num2)."<br>";
    echo "El resto de la división entera de $num1/$num2 es igual a ", $num1%$num2."<br>";
    ?>

<br>
<hr>
  <h3>Ejercicio 4</h3>
    <?php
    $tempC = 20;
    $tempF = ($tempC*1.8+32);
    echo "Los $tempC °C son equivalentes a $tempF °F";
    ?>

<br>
<hr>
  <h3>Ejercicio 5</h3>
    <?php
    $base = 18;
    $altura = 12;
    $pi = 3.14159265359;
    $radio = 30;
    echo "El perimetro del rectangulo de base $base cm y $altura cm es igual a ", $base*2+$altura*2, "cm"."<br>";
    echo "y su área es ", $base*$altura,"cm2"."<br>";
    echo "El perimetro del circulo con radio de $radio cm es igual a ", $pi*$radio*2, "cm"."<br>";
    echo "y su área es ", $pi*$radio**2,"cm2";
    ?>

  </body>
</html>
