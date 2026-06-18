<?php

// Ejercicio 6: Generar un número al azar entre 1 y 100 y mostrarlo. Mostrar todos los números comprendidos entre 1 y el aleatorio, de mayor a menor y viceversa.
// Complejidad: MEDIA (2 puntos)

//Tu código aquí
$numero = rand(1, 100);

echo "Numero aleatorio: $numero<br><br>";

echo "De 1 hasta $numero:<br>";
for ($i = 1; $i <= $numero; $i++) {
    echo $i . " ";
}
echo "<br><br>";

echo "De $numero hasta 1:<br>";
for ($i = $numero; $i >= 1; $i--) {
    echo $i . " ";
}