<?php

require_once 'autoload.php';

use Estudo\Banco\Modelo\Funcionario\{Diretor, Gerente};
use Estudo\Banco\Modelo\CPF;
use Estudo\Banco\Service\Autenticador;

$autenticador = new Autenticador();

$umDiretor = new Diretor(
  'Rodrigo v',
  new CPF('123.456.789-10'),
  10000
);

$autenticador->tentaLogin($umDiretor, '1234');