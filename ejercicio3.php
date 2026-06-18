<?php

// Ejercicio 3: Escribe una función llamada obtenerFactorial que tome un número entero no negativo como parámetro y calcule su factorial. El factorial de un número se obtiene multiplicando todos los números enteros positivos desde 1 hasta el número dado.
// Complejidad: MEDIA (2 puntos)

function obtenerFactorial($numero){
    $resultado = 1;
    for ($i = 1; $i <= $numero; $i++) {
        $resultado = $resultado * $i;
    }
    echo "el factorail de $numero es: $resultado";
}
obtenerFactorial(5);
