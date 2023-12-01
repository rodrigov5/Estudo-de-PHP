<?php

require_once 'autoload.php';

use Estudo\Banco\Modelo\CPF;
use Estudo\Banco\Modelo\Funcionario\Funcionario;
use Estudo\Banco\Service\ControladorDeBonificacoes;
use Estudo\Banco\Modelo\Funcionario\{Diretor, Gerente, Desenvolvedor, EditorVideo};

$umFuncionario = new Gerente(
  'Rodrigo v',
  new CPF('123.456.789-10'),
  1000
);

$outroFuncionario = new Diretor(
  'João v',
  new CPF('123.456.789-11'),
  2000
);

$dev = New Desenvolvedor(
  'Letra Jota',
  new CPF('123.456.789-12'),
  1000
);

$editor = new EditorVideo(
  'Carlos',
  new CPF('123.456.789-13'),
  4000
);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($outroFuncionario);
$controlador -> adicionaBonificacaoDe($dev);
$controlador -> adicionaBonificacaoDe($editor);

echo $controlador->recuperaTotal();

