<?php

$frutas = ['Banana', 'Maçã', 'Morango', 'Uva', 'Abacaxi'];
$carros = ['Fusca', 'Brasilia', 'Gol', 'Uno', 'Celta'];

for ($i = 0; $i < count($frutas); $i++) {
    echo $frutas[$i] . PHP_EOL;
}

for ($i = 0; $i < count($carros); $i++) {
    echo $carros[$i] . PHP_EOL;
}