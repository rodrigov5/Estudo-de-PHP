<?php

namespace Estudo\Banco\Modelo;

interface Autenticavel
{
    public function podeAutenticar(string $senha): bool;
}