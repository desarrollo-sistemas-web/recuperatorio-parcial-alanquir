<?php

// Ejercicio 4: Escribe una función llamada encontrarMaximo que tome un arreglo de números como parámetro y devuelva el valor máximo contenido en el arreglo.
// Complejidad: MEDIA (2 puntos)
function encontrarMaximo($numeros){
    $maximo = $arreglo[0];
    foreach ($arreglo as $numeros) {
        if ($numeros > $maximo) {
            $maximo = $numeros;
        }
    }
    echo "El valor máximo es: $maximo";
}
