<?php

$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$sexo = $_POST['sexo'];
$rol = $_POST['rol'];
$image = $_FILES['image'];
$path = $_SERVER['DOCUMENT_ROOT'] . '/mi_curso/formulario/img' . '/' . $image['name'];

echo "<p>el nombre del usuario es $nombre </p>";
echo "<p>y la edad es $edad </p>";
echo "<p>y es de genero $sexo </p>";

echo "<p>roles</p>";

echo "<ul>";

foreach ($rol as $r) {
    echo "<li>$r</li>";
}
   
echo "</ul>";

echo $path;

move_uploaded_file($image['tmp_name'], $path);

//var_dump($image);