<?php

$numero = 100;
$count = 0;

echo "Numeros impares de $count a $numero" . PHP_EOL; 

for ($count; $count <= $numero; $count++) {
    if ($count % 2 != 0) {
        echo $count . PHP_EOL;
    }
}