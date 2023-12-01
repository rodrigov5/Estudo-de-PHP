<?php

namespace Estudo\Banco\Modelo\Funcionario;

class Desenvolvedor extends Funcionario
{
   public function sobreDeNivel()
   {
      recebeAumento($this->recuperaSalario() * 0.75);
   }

   public function calculaBonificacao(): float
   {
      return 500.0;
   }
}