<?php

require_once 'autoload.php';

use Estudo\Banco\Modelo\Endereco;

$umEndereco = new Endereco('São Paulo', 'Vila Mariana', 'Rua Treze de Maio', '123B');
$outroEndereco = new Endereco('São Paulo', 'Centro', 'Avenida São João', '321');

echo $umEndereco->cidade . PHP_EOL;