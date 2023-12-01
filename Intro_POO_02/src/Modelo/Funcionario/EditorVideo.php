<?php

namespace Estudo\Banco\Modelo\Funcionario;

use Estudo\Banco\Modelo\Funcionario\Funcionario;

class EditorVideo extends Funcionario
{
    public function calculaBonificacao(): float {
        return 600;
    }
}