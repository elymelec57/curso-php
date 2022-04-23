<?php
 declare(strict_types=1);

function calificacion($nombre, $lugar = 10){

    echo "el nombre del curso es $nombre y su lugar de posicion es $lugar"."<br>";
}

calificacion("react desde cero", 1);

function concatenar(...$palabras){

    $resul = "";

    foreach ($palabras as $p) {
        
        $resul .= $p . "";
    }

    echo $resul."<br>";
}

concatenar('react', "desde", "cero", "y", "gratis");

// int, float, null, array, object, string, bool.

function sumarEnteros(int $n, int $n2){

    return ($n + $n2)/2;
}

$suma = sumarEnteros(2,5);
echo $suma;