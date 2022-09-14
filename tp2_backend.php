<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<h1>TP n°3 Quiroz Martin Alejandro</h1>

<br>
<hr>
  <h3>Ejercicio 1</h3>
    <?php
    echo "Crear una variable n y validar que sea un número positivo. <br>";

    $num1 = random_int(-3, 5);
    if ($num1 >=0) {
      echo "El numero $num1 es positivo";
    } else {
      echo "El numero $num1 NO es positivo";
    }

    ?>

<br>
<hr>
  <h3>Ejercicio 2</h3>
    <?php
    echo "Crear una variable n y validar que sea un número mayor a 1 y menor a 10. <br>";

    $numN = random_int(-3, 11);
    if ($numN > 1 && $numN < 10) {
      echo "El numero $numN esta entre 1 y 10";
    } else {
      echo "El numero $numN NO cumple la condicion";
    }

    ?>

<br>
<hr>
  <h3>Ejercicio 3</h3>
    <?php
    echo "Crear una variable n y validar que sea un número mayor a 10 o menor a 2. <br>";

    $num3 = random_int(-3, 15);
    if ($num3 > 10 || $num3 < 2) {
      echo "El numero $num3 cumple la condicion";
    } else {
      echo "El numero $num3 NO cumple la condicion";
    }

    ?>

<br>
<hr>
  <h3>Ejercicio 4</h3>
    <?php
    echo "Crear dos variables, una con nombre numero1 y otra con el nombre de numero2. <br>
          Si numero1 es mayor a numero2, mostrar por pantalla, la suma y la resta. <br>
          Si numero2 es mayor a numero1, mostrar por pantalla la multiplicación, <br>
          la división entera y el resto de la división. <br>
          Si numero1 y numero2 son iguales, mostrar el siguiente mensaje <br>
          “Los números ingresados son iguales”. <br>";

    $numero1 = random_int(-10, 10);
    $numero2 = random_int(-11, 10);
    echo "El numero1 vale $numero1 y el numero2 vale $numero2. <br>";
    if ($numero1 > $numero2) {
      echo "la suma de ambos es ",$numero1+$numero2," y la resta de ambos es ",$numero1-$numero2;
    } elseif ($numero1 < $numero2) {
      echo "la multiplicacion de ambos es ",$numero1*$numero2."<br>";
      echo "la división entera de $numero2/$numero1 es igual a ", intdiv($numero2, $numero1)."<br>";
      echo "el resto de la division es igual a ", $numero2%$numero1."<br>";
    } else {
      echo "ambos numeros son iguales";
    }

    ?>

  </body>
</html>
