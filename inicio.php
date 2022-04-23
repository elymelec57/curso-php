<?php

    // VARIABLES 
    $nombre = "ely colmenarez";
    $Nombre = "jose guedez";

    $numero = 123.45;
    $cadena = "Esta es una cadena";
    $otra_cadena = "este es mi nombre: 'ely' y tengo \"24\" ";
    // FIN VARIABLES

    //operadores matematicos
    /* + - * / % */
    $a = 3;
    $b = 2;
    $c = $a + $b;
    $d = 2 * 2 + 2 * 3 + 5 - 1;
    //fin de operadores

    //operadores de comparacion y logicos
    /* ==  != >   <   >= <= === */
    $numero = 3;
    $numero1 = 5;
    var_dump($numero != $numero1);

    //  &&   y    || 
    $var = "22";
    $var1 = "22";
    var_dump($var && $var1);
    var_dump($var > $var1 || $var > 5);

    $e = 10;
    $f = $e++;
    $g = 4;
    $h = 10;

    $g += $h;

    //fin de operadores de comparacion y logicos


    // condicionales
    $num = 1;
    $num2 = 10;

    if ($num > $num2) {
        echo "la variable num es mayor que la num2 <br>";
    }elseif ($num < $num2) {
        echo "la variable num es menor que la num2 <br>";
    }else{
        echo "la variable son iguales <br>";
    }


    //operador ternario
    $valor = $num > $num2 ? "Mayor" : ( $num < $num2 ? "Menor" : "igual"  );
    echo "la variable num es $valor que la num2 <br>";

    $variable = 2;
    switch ($variable) {
        case '1':
            echo "lunes <br>";
            break;
        case '2':
            echo "martes <br>";
            break;
        case '3':
            echo "miercoles <br>";
            break;
        case '4':
            echo "jueves <br>";
            break;
        case '5':
             echo "viernes <br>";
            break;
                    
        default:
            "valor no aceptado";
            break;
    }

    /*echo match($variable){
        1 => "lunes",
        2 => "martes",
        3 => "miercoles",
        4 => "jueves",
        5 => "viernes",
        default => "valor no aceptado"
    };*/

    //fin de los condicionales

    // estructuras repetitivas

    $saludo = 1;
    $saludo2 = 9;
    while ($saludo <= 10) {
        echo "bienvanido <br>";
        $saludo++;
    }

    do {
        echo "bienvanido al sistema <br>";
        $saludo2++;
    } while ($saludo2 <= 10);

    // siclo for y foreach

    $filas = 10;
    for ($i=0; $i <= $filas ; $i++) { 
        for ($j=0; $j <= $i ; $j++) { 
            echo "*";
        }
        echo "<br>";
    }


    $productos = ['harinas','cafe','mantequilla','salsa'];

    foreach ($productos as $indice => $producto) {
        echo $producto ."en el indice: $indice"."<br>";
    }

    for ($x=1; $x <= 20 ; $x++) { 

        if($x == 10){
            continue;
        }

        echo $x."<br><br>";
    };

    //fin de las estructuras repetitivas 

    // funciones 
    echo "Marca de tiempo:".time()."<br>";
    echo "un numero aleatorio del 10 al 50: ".rand(10,50)."<br>";
    echo " el valor de PI:".pi()."<br>";
    // fin de funciones


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bienvenido al sistema: <?php echo "personal $Nombre"; ?> </h1>
    <?php

        echo "Numero: $numero";
        echo "<br>";
        echo "cadenas: " . $cadena;
        echo "<br>";
        echo $otra_cadena;
        echo "<br>";
        echo "operaciones matematicas";
        echo "<br>";
        echo $c ." --- ". $d;

        echo "<br>";
        echo "<br>";
        echo "asignacion combinada";
        echo "<br>";
        echo "variable e: $e";
        echo "variable f: $f";
        echo "variable f: $g";

    ?>
</body>
</html>