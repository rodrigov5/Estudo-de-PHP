<?php

require_once 'funcoes.php';

$contasCorrentes = [
'123.456.789-10' => [
    'titular' => 'Rodrigo',
    'saldo' => 1000
], 

'123.456.789-11' => [
    'titular' => 'João',
    'saldo' => 11000
], 

'123.456.789-12' => [
    'titular' => 'Teste',
    'saldo' => 100
   ],
];

unset($contasCorrentes['123.456.789-11']);

$contasCorrentes['123.456.789-10'] = sacar($contasCorrentes['123.456.789-10'], 500);

$contasCorrentes['123.456.789-12'] = depositar($contasCorrentes['123.456.789-12'], 1);

titularComLetrasMaisculas($contasCorrentes['123.456.789-10']);

// echo "<ul>";
// foreach ($contasCorrentes as $key => $conta) {
//     // ['titular' => $titular, 'saldo' => $saldo] = $conta;
//     exibeConta($conta);
// };
// echo "</ul>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contas Correntes</h1>

    <ul>
        <?php foreach ($contasCorrentes as $cpf => $conta) { ?>
            <li>
                <h3><?= $conta['titular']; ?> - <?= $cpf; ?></h3>
                <p>Saldo: <?= $conta['saldo']; ?></p>
            </li>
        <?php } ?>
    </ul>
</body>
</html>