<?php

namespace Estudo\Banco\Modelo\Funcionario;

use Estudo\Banco\Modelo\Pessoa;
use Estudo\Banco\Modelo\CPF;

abstract class Funcionario extends Pessoa
{
  private float $salario;

  public function __construct(string $nome, CPF $cpf, float $salario) 
  {
    parent::__construct($nome, $cpf);
    $this->salario = $salario;
  }

  public function recuperaSalario(): float 
  {
    return $this->salario;
  }

  public function alteraNome(string $nome): void 
  {
    $this->validaNome($nome);
    $this->nome = $nome;
  }

  public function recebeAumento(float $valorAumento): void{
    if ($valorAumento < 0) {
      echo "Aumento deve ser positivo";
      return;
    }

    $this->salario += $valorAumento;
  }

  abstract public function calculaBonificacao(): float;
}
