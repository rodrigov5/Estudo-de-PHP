<?php

function exibeMensagem(string $msg) 
{
    echo $msg . '<br>';
};

function sacar(array $conta, float $valorSaque): array
{
    if ($valorSaque > $conta['saldo']) {
        exibeMensagem("Você não pode sacar, valor deve ser menor que o saldo da conta");
        exit;
    }

    $conta['saldo'] -= $valorSaque;
    return $conta;
}

function depositar(array $conta, float $valorDeposito): array
{
    if ($valorDeposito <= 0) {
        exibeMensagem("Você não pode depositar um valor negativo");
        exit;
    }

    $conta['saldo'] += $valorDeposito;
    return $conta;
}

function titularComLetrasMaisculas(array &$conta)
{
    $conta['titular'] = mb_strtoupper($conta['titular']);
}

function exibeConta($conta)
{
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    echo "<li>Titular: $titular. Saldo: $saldo</li>";
}