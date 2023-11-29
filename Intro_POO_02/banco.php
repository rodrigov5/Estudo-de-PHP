<?php

require_once 'autoload.php';

use Estudo\Banco\Modelo\Conta\Titular;
use Estudo\Banco\Modelo\CPF;
use Estudo\Banco\Modelo\Endereco;
use Estudo\Banco\Modelo\Conta\Conta;

$cpf = new CPF('123.456.789-10');
$endereco = new Endereco('São Paulo', 'Vila Mariana', 'Rua A', '123');
$rodrigo = new Titular($cpf, 'Rodrigo', $endereco);
$primeiraConta = new Conta($rodrigo);

var_dump($primeiraConta);
