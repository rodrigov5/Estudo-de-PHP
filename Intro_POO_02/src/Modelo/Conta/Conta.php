<?php

namespace Estudo\Banco\Modelo\Conta;


abstract class Conta
{
	private $titular;
	private float $saldo;
	private static $numeroDeContas = 0;

	public function __construct(Titular $titular)
	{
		$this->titular = $titular;
		$this->saldo = 0;

		self::$numeroDeContas++;
	}

	public function sacar(float $valorASacar) : void
	{	
		$tarifaSaque = $valorASacar * $this->percentualTarifa();
		$valorSaque = $valorASacar + $tarifaSaque;
		if ($valorSaque > $this->saldo) {
			echo "Saldo indisponível";
			return;
		}

		$this->saldo -= $valorSaque;
	}

	public function depositar(float $valorAdepositar): void
	{
		if ($valorAdepositar < 0) {
			echo "Valor precisa ser positivo";
			return;
		}

		$this->saldo += $valorAdepositar;
	}

	public function recuperarSaldo(): float
	{
		return $this->saldo;
	}

	public function recuperarNomeTitular(): string
	{
		return $this->titular->recuperaNome();
	}

	public function recuperarCpfTitular(): string
	{
		return $this->titular->CPF->recuperaCpf();
	}

	public static function recuperaNumeroDeContas(): int
	{
		return self::$numeroDeContas;
	}

	abstract protected function percentualTarifa(): float;
}
