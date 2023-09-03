<?php

$altura = 1.70;
$peso = 70;

$imc = $peso / ($altura ** 2);

echo "Seu IMC é de " . number_format($imc, 2, '.') . PHP_EOL;

if ($imc < 18.5) {
    echo "Você está abaixo do peso" . PHP_EOL;
} else if ($imc >= 18.6 and $imc <=24.9) {
    echo "Você está com o peso ideal, Parabéns!" . PHP_EOL;
} else if ($imc >= 25.0 and $imc <= 29.9) {
    echo "Você está com sobrepeso" . PHP_EOL;
} else if ($imc >= 30.0 and $imc <= 34.9) {
    echo "Você está com obesidade grau I" . PHP_EOL;
} else if ($imc >= 35.0 and $imc <= 39.9) {
    echo "Você está com obesidade grau II" . PHP_EOL;
} else {
    echo "Você está com obesidade grau III" . PHP_EOL;
}