<?php

namespace Estudo\Banco\Modelo\Funcionario;

use Estudo\Banco\Modelo\Autenticavel;


class Diretor extends Funcionario implements Autenticavel
{
    public function calculaBonificacao(): float
    {
        return $this->recuperaSalario() * 2;
    }

    public function podeAutenticar(string $senha): bool
    {
        return $senha === '1234';
    }
}