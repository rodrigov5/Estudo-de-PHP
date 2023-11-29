<?php

require_once 'autoload.php';

use Estudo\Banco\Modelo\{CPF, Funcionario};
use Estudo\Banco\Service\ControladorDeBonificacoes;

$umFuncionario = new Funcionario(
  'Rodrigo v',
  new CPF('123.456.789-10'),
  'Desenvolvedor',
  1000
);

$outroFuncionario = new Funcionario(
  'João v',
  new CPF('123.456.789-11'),
  'Desenvolvedor',
  2000
);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($outroFuncionario);

echo $controlador->recuperaTotal();

// parei na aula 120
