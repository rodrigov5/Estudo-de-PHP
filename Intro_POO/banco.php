<?php


require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/CPF.php';

$cpf = new CPF('123.456.789-10');
$rodrigo = new Titular($cpf, 'Rodrigo');
$primeiraConta = new Conta($rodrigo);

var_dump($primeiraConta);