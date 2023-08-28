<?php

$contasCorrentes = [
    '123.456.789-10' => [
        'Titular' => 'Mariana',
        'Agência' => '001',
        'Conta' => '2345-6',
        'Saldo' => 1500
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

function sacar(array $conta, float $valorASacar) : array {
    if ($valorASacar > $conta['Saldo']) {
        exibeMensagem("Você não pode sacar");
    } else {
        $conta['Saldo'] -= $valorASacar;
    }
    return $conta;
};

function exibeMensagem(string $mensagem) {
    echo $mensagem . PHP_EOL;
};

function depositar(array $conta, float $valorADepositar): array{
    if($valorADepositar > 0) {
        $conta['Saldo'] += $valorADepositar;
    } else {
        exibeMensagem("Despositos precisam ser positivos.");
    }
    return $conta;
};


$contasCorrentes['123.456.789-10'] = sacar(
    $contasCorrentes['123.456.789-10'], 
    500
);

// $contasCorrentes['123.456.789-10'] = sacar($contasCorrentes['123.456.789-10'], 500);
// $contasCorrentes['234.567.891-01'] = sacar($contasCorrentes['234.567.891-01'], 500);

foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem($cpf . " - " . $conta['Titular'] . ": " . $conta['Saldo']);
}
?>