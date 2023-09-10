<?php

$conta1 = [
    'titular' => 'Rodrigo',
    'saldo' => 1000
];

$conta2 = [
    'titular' => 'João',
    'saldo' => 110000
];

$conta3 = [
    'titular' => 'Teste',
    'saldo' => 100
];

$contasCorrentes = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contasCorrentes); $i++) {
    echo $contasCorrentes[$i]['titular'] . PHP_EOL;
};