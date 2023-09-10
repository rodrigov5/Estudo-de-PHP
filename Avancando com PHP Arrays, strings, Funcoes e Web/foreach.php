<?php

$contasCorrentes = [
'123.456.789-10' => [
    'titular' => 'Rodrigo',
    'saldo' => 1000
], 

'123.456.789-11' => [
    'titular' => 'João',
    'saldo' => 110000
], 

'123.456.789-12' => [
    'titular' => 'Teste',
    'saldo' => 100
   ],
];

$contasCorrentes[] = [
    'titular' => 'Claudia',
    'saldo' => 2000
];


foreach ($contasCorrentes as $key => $conta) {
    echo $key . "-" . $conta['titular'] . PHP_EOL;
};