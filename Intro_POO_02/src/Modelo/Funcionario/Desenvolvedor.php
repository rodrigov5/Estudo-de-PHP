<?php

namespace Estudo\Banco\Modelo\Funcionario;

class Desenvolvedor extends Funcionario
{
   public function calculaBonificacao(): float 
   {
        return $this->recuperaSalario() * 0.75;
   }

   public function sobreDeNivel()
   {
      recebeAumento($this->recuperaSalario() * 0.75);
   }
}