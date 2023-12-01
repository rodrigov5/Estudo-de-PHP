<?php

namespace Estudo\Banco\Modelo\Conta;

use Estudo\Banco\Modelo\Pessoa;
use Estudo\Banco\Modelo\CPF;
use Estudo\Banco\Modelo\Endereco;
use Estudo\Banco\Modelo\Autenticavel;

class Titular extends Pessoa implements Autenticavel 
{
  private Endereco $endereco;

  public function __construct(CPF $cpf, string $nome, Endereco $endereco) 
  {
    parent::__construct($nome, $cpf);
    $this->endereco = $endereco;
  }

  public function recuperaEndereco(): Endereco 
  {
    return $this->endereco->__toString();
  }

  public function podeAutenticar(string $senha): bool
    {
        return $senha === '4444';
    }
}
