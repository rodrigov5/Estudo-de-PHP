<?php


$notas = [
  [
    'aluno' => 'Carlos',
    'nota' => 9
  ],
  [
    'aluno' => 'Maria',
    'nota' => 3
  ],
  [
    'aluno' => 'Pedro',
    'nota' => 10
  ]
  ];

function ordenaNotas(array $nota1, array $nota2) : int
{
  return $nota2['nota'] <=> $nota1['nota'];
}

usort($notas, 'ordenaNotas');
var_dump($notas);