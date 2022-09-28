<!DOCTYPE html>
<html lang="es" dir="ltr">

  <head>
    <meta charset="utf-8">
    <title></title>
  </head>

  <body>

      <h1>Tarea n°4 Quiroz Martin Alejandro</h1>

      <br>
      <hr>
        <h3>Ejercicio 1</h3>
          <?php
          echo "Mostrar los números del 1 al 100 <br>";
          for ($i=1; $i < 101; $i++) {
            echo"$i <br/>";
          }
          ?>
      <br>

      <hr>
        <h3>Ejercicio 2</h3>
          <?php
          echo "Mostrar los números del 100 al 1 <br>";
          $d = 100;
          for ($i=1; $i < 101; $i++) {
            echo"$d <br/>";
            $d = $d-1;
          }
          ?>
      <br>

      <hr>
        <h3>Ejercicio 3</h3>
          <?php
          echo "Mostrar los números pares del 1 al 100. <br>";
          for ($i=1; $i < 101; $i++) {
            if (($i%2)==0) {
              echo"$i <br/>";
            }
          }
          ?>
      <br>

      <hr>
        <h3>Ejercicio 4</h3>
          <?php
          echo "Mostrar los números impares del 1 al 100. <br/>";
          for ($i=1; $i < 101; $i++) {
            if (($i%2)!=0) {
              echo"$i <br/>";
            }
          }
          ?>
      <br>

      <hr>
        <h3>Ejercicio 5</h3>
          <?php
          echo "Mostrar la suma de los números de 1 a 20. <br/>";
          $sum = 1;
          for ($i=1; $i < 21; $i++) {
            if ($i==1) {
              echo "La suma hasta ahora es $i <br/>";
              $sum = $i;
            }
            else {
              echo"La suma de $sum + $i hasta ahora es ",$sum+$i , "<br/>";
              $sum = $sum + $i;
            }
          }
          ?>
      <br>

      <hr>
        <h3>Ejercicio 6</h3>
          <?php
          echo "Mostrar la suma de números pares de 1 a 20. <br/>";
          $sum = 1;
          for ($i=1; $i < 21; $i++) {
            if ($i==2) {
              echo "La suma hasta ahora es $i <br/>";
              $sum = $i;
            }
            else {
              if (($i%2)==0) {
                echo"La suma de $sum + $i hasta ahora es ",$sum+$i , "<br/>";
                $sum = $sum + $i;
              }
            }
          }
          ?>
      <br>

    </body>
</html>
