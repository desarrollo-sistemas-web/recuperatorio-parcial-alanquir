<?php

// Ejercicio 13:  Crea una función llamada encontrarPalabraMasLarga que tome una cadena de texto como parámetro y devuelva la palabra más larga que se encuentra en la cadena.

// Complejidad: ALTA (3 puntos)

//Pista: puedes usar la función explode() para separar la cadena en palabras y strlen() contar los caracteres. Busca en la documentación de PHP cómo se usa.


function encontrarPalabraMasLarga($cadena){

    $palabras = explode(" ", $cadena);
    $masLarga = "";

    foreach ($palabras as $palabra) {

        if (strlen($palabra) > strlen($masLarga)) {
            $masLarga = $palabra;
        }
    }

    return $masLarga;
}

echo encontrarPalabraMasLarga("Hola como estas ricoteros");
