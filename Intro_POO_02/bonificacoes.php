<?php

require_once 'autoload.php';

use Estudo\Banco\Modelo\CPF;
use Estudo\Banco\Modelo\Funcionario\Funcionario;
use Estudo\Banco\Service\ControladorDeBonificacoes;
use Estudo\Banco\Modelo\Funcionario\{Diretor, Gerente, Desenvolvedor};

$umFuncionario = new Gerente(
  'Rodrigo v',
  new CPF('123.456.789-10'),
  'Desenvolvedor',
  1000
);

$outroFuncionario = new Diretor(
  'João v',
  new CPF('123.456.789-11'),
  'Desenvolvedor',
  2000
);

$dev = New Desenvolvedor(
  'Letra Jota',
  new CPF('123.456.789-12'),
  'Desenvolvedor',
  1000
);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($outroFuncionario);
$controlador -> adicionaBonificacaoDe($dev);

echo $controlador->recuperaTotal();

