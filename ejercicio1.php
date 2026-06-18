<?php

//Ejercicio 1: Escribe una función llamada esPositivo que tome un número entero como parámetro y devuelva true si el número es positivo (mayor a cero) y false si es negativo o cero.
//Complejidad: BAJA (1 punto)

function esPositivo($numero){
    //Escribe tu código aquí
    if ($numero > 0) {
        echo "es positivo : $numero";
    }else {
        echo "es negativo: $numero";
    }
}
$numero = rand(-10, 10);
esPositivo($numero);
