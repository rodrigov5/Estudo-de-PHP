<?php

$alunos = array(
  "Pedro" => 8.5,
  "Maria" => 9.0,
  "José" => null,
  "Paulo" => 5.5,
  "Marta" => 10.0,
);

echo 'Maria fez a prova: ' . PHP_EOL;
var_dump(isset($alunos['Maria']));

// array_key_exists() verifica se uma chave existe em um array
// in_array verifica se um valor existe em um array
// isset verifica se uma variável existe e não é null