<?php


$array = [23 , 12, 34, 100];

echo $array[2];
echo "<br>";

$array1 = [23 , 'ely', 34, false];

echo $array1[0]." ".$array1[1]." ".$array1[2]." ".$array1[3];

echo "<br>";

$datos = [
    'name' => 'ely jose',
    'correo' => 'elycolmenarez084@gmail.com',
    'direccion' => 'pueblo nuevo'
];

echo "Persona ".$datos['name']." y su correo es ".$datos['correo']." ubicado en ".$datos['direccion']."<br>";
echo "<br>";

$data = [
    [
        'name' => 'ely jose',
        'correo' => 'elycolmenarez084@gmail.com',
        'direccion' => 'pueblo nuevo',
        'telefono' => [
            'casa' => '123456',
            'personal' => '654321'
        ]
    ],
    [
        'name' => 'maria',
        'correo' => 'maria@gmail.com',
        'direccion' => 'bolivar'
    ],
    [
        'name' => 'genesis',
        'correo' => 'elycolmenarez084@gmail.com',
        'direccion' => 'santa rosalia'
    ],
    
];

echo "arreglo multidimencinales <br>";
echo $data[1]['correo'];
echo "<br>";
echo $data[0]['telefono']['personal']."<br>";

echo "<br>";

foreach ($data as $d) {
    echo $d['name'] . "<br>";
    echo $d['correo'] . "<br>";
    echo $d['direccion'] . "<br>";

    echo "<br>";
}


$numeros = [12, 2 , 100, 45];

list($a, $b , $c) = $numeros;

echo $c;
echo "<br>";

$arreglo = range(10,20);
echo "<br>";

var_dump($arreglo);

echo $arreglo[5];

echo "<br>";
// para saber cuantos datos tiene el array
echo count($arreglo);
echo "<br>";

$nombres = ['perro', 'maria', 'ely', 'genesis'];

unset($nombres[1]); // elimina ese indice del arreglo

if (in_array('maria', $nombres )) {
    echo "el nombre esta en el arreglo <br>";
}else{
    echo "el nombre no esta <br>";
}