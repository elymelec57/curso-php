<?php

$cadena = "aeiou";

echo $cadena[2]."<br>";

echo strlen($cadena)."<br>"; // devuelve bits no la longitud de la cadena

echo mb_strlen($cadena)."<br>"; // devuelve la longitud de la cadena

echo strpos($cadena, 'i')."<br>"; // devuelve el indice de donde se encontro

$cadena2 = "hola mundo con php";

// php  version 8

//echo str_contains($cadena2, 'mundo') ? 'si se encuentra' : 'no se esta '; // returna true o false 

//echo str_starts_with($cadena2, 'mundo') ? 'si se encuentra' : 'no se esta '; // verifica si la cadena comienza con el dato q recibe 

//echo str_ends_with($cadena2, 'mundo') ? 'si se encuentra' : 'no se esta '; // verifica si la cadena finaliza con el dato q recibe

// php version 8

$text = "Venezuela";
$text2 = "venezuela";

if (strcasecmp($text, $text2) == 0) {
    echo "los textos son iguales <br>";
}else{
    echo "los textos no son iguales <br>";
}

$text3 = "Venezuela es grande";

echo substr($text3, 2,5)."<br>";

echo str_replace('grande', 'hermosa', $text3);
echo "<br>";

echo strtolower($text3);
echo "<br>";

echo strtoupper($text3);
    