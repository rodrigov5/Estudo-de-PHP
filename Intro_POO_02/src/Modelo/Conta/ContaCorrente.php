<?php

namespace Estudo\Banco\Modelo\Conta;

class ContaCorrente extends Conta 
{
  protected function percentualTarifa(): float 
  {
    return 0.05;
  }

  public function tranferir(float $valorATransferir, Conta $contaDestino): void
	{
		if ($valorATransferir > $this->saldo) {
			echo "Saldo indisponível";
		}

		$this->sacar($valorATransferir);
		$contaDestino->depositar($valorATransferir);
	}
}
