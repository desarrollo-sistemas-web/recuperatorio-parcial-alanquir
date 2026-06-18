<?php

// Ejercicio 5: Escribe una función llamada obtenerDiaSemana que tome un número entero del 1 al 7 como parámetro y devuelva el día de la semana correspondiente, donde 1 es "Lunes", 2 es "Martes", etc.

// Complejidad: BAJA (1 punto)

function obtenerDiaSemana($numero){
    if ($numero == 1) {
        echo "lunes";
    } elseif ($numero == 2) {
        echo "martes";
    } elseif ($numero == 3) {
        echo "miercoles";
    } elseif ($numero == 4) {
        echo "jueves";
    } elseif ($numero == 5) {
        echo "viernes";
    } elseif ($numero == 6) {
        echo "sabadode";
    } else {
        echo "domingo";
    }
}


//Tests
assert("Lunes" == obtenerDiaSemana(1), "El dia 1 es Lunes");
assert("Martes" == obtenerDiaSemana(2), "El dia 2 es Martes");
assert("Miercoles" == obtenerDiaSemana(3), "El dia 3 es Miercoles");
assert("Jueves" == obtenerDiaSemana(4), "El dia 4 es Jueves");