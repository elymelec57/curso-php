<?php

function factorial($n){

    $resul = 1;

    for ($i=1; $i <= $n ; $i++) { 
        $resul = $resul * $i;
    }

    return $resul;
}

$valor = factorial(10);

echo "el valor del numero introducido es: $valor";