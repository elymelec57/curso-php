<?php

$a = 10;
$b = 20;

function test(&$n){
    $n = $n + 10;
}

test($a);
test($b);

echo $a."<br>";
echo $b."<br>";
