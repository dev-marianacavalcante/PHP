<?php

require_once 'funcoes.php';

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Mariana',
        'agencia' => '001',
        'conta' => '2345-6',
        'saldo' => 1500
    ],
    '234.567.891-01'=> [
        'titular' => 'Marcos',
        'agencia' => '002',
        'conta' => '3456-7',
        'saldo' => 2000,
    ],
    '345.678.910-12' => [
        'titular' => 'Ravi',
        'agencia' => '003',
        'conta' => '4567-8',
        'saldo' => 3000,
    ],
];

$contasCorrentes['123.456.789-10'] = sacar(
    $contasCorrentes['123.456.789-10'], 
    500
);

$contasCorrentes['234.567.891-01'] = depositar(
    $contasCorrentes['234.567.891-01'],
    900
);

//remover
unset($contasCorrentes['345.678.910-12']);

titularLetrasMaiusculas($contasCorrentes['234.567.891-01']);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco</title>
</head>

<body>
    <h1>Contas correntes</h1>

    <ul>
        <?php foreach($contasCorrentes as $cpf => $conta) { ?>
        <dt>
            <h3><?= $conta['titular']; ?> - <?= $cpf; ?> </h3>
        </dt>
        <dd>
            Saldo:<?= $conta['saldo']; ?>
        </dd>

        <?php } ?>
    </ul>
</body>

</html>