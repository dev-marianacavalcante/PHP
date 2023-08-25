<?php

$contasCorrentes = [
    '123.456.789-10' => [
        'Titular' => 'Mariana',
        'Agência' => '001',
        'Conta' => '2345-6',
        'Saldo' => 1000
    ],
    '234.567.891-01'=> [
        'Titular' => 'Marcos',
        'Agência' => '002',
        'Conta' => '3456-7',
        'Saldo' => 2000,
    ],
    '345.678.910-12' => [
        'Titular' => 'Ravi',
        'Agência' => '003',
        'Conta' => '4567-8',
        'Saldo' => 3000,
    ],
];

$contasCorrentes['086.986.543-09'] = [
    'Titular' => 'Claudia',
    'Agência' => '001',
    'Conta' => '2345-6',
    'Saldo' => 1000,
];

foreach ($contasCorrentes as $cpf => $conta) {
    // echo $conta['Titular'] . PHP_EOL;
    echo $cpf . " " . $conta['Titular'] . PHP_EOL;
};