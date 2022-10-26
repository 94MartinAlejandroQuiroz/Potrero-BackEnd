<!DOCTYPE html>
<html lang="es" dir="ltr">

  <head>
    <meta charset="utf-8">
    <title></title>
  </head>

  <body>

      <h1>Tarea n°5 Quiroz Martin Alejandro</h1>

      <br>
      <hr>
        <h3>Ejercicio 1</h3>
          <?php
          echo "Almacenar en un array los 10 primeros números pares y mostrar en pantalla uno debajo del otro.<br>";
          $numerospares = [2,4,6,8,10,12,14,16,18,20];
          foreach ($numerospares as $valor) {
            echo"$valor <br/>";
          }
          ?>
      <br>

      <hr>
        <h3>Ejercicio 2</h3>
          <?php
          echo "Crear un array e introducir los siguientes valores: Pedro, Ana, 34 y 1, sin asignar el índice de la matriz. <br>
                Mostrar el esquema del array con print_r(). <br>";
          $array = ["Pedro", "Ana", "34", "1"];
          print_r ($array);
          ?>
      <br>

      <hr>
        <h3>Ejercicio 3</h3>
          <?php
          echo "Crear un array asociativo e introducir los siguientes valores: <br>
                Nombre: Pedro <br>
                Apellido: Torres <br>
                Dirección: Av. Mayor 3703 <br>
                Teléfono: 1122334455 <br> ";
          $array = ['Nombre'=> "Pedro", 'Apellido'=> "Torres",'Direccion'=> "Av. Mayor 3703", 'Teléfono'=> 1122334455];
          print_r($array);
          ?>
      <br>

      <hr>
        <h3>Ejercicio 4</h3>
          <?php
          echo "Crear un array introduciendo las ciudades: <br>
                Madrid, Barcelona, Londres, New York, Los Ángeles y Chicago, sin asignar índices al array. <br>
                A continuación, muestra el contenido del array. <br>
                Ejemplo: La ciudad con el índice 0 tiene el nombre Madrid. <br>";
          $array = ["Madrid", "Barcelona", "Londres", "New York", "Los Ángeles", "Chicago"];
          for ($i=0; $i < 6; $i++) {
              echo "La ciudad con indice $i tiene el nombre $array[$i] <br/>";
            }
          ?>
      <br>

      <hr>
        <h3>Ejercicio 5</h3>
          <?php
          echo "Repite el ejercicio anterior pero ahora se ha de crear índices, <br>
                MD para Madrid, BCL para Barcelona, LD para Londres, <br>
                NY para New York, LA para Los Ángeles y CCG para Chicago. <br>
                Ejemplo: El índice de Madrid es MD. <br>";
          $array = ['Madrid'=> "MD", 'Barcelona'=> "BCL", 'Londres'=> "LD",
                    'New York'=> "NY", 'Los Ángeles'=> "LA", 'Chicago'=> "CCG"];
              foreach ($array as $valor => $value) {
                echo "El indice de $valor es $value <br>";
              }
          ?>
      <br>

    </body>
</html>
