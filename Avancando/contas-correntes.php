<?php
$conta1 = [
    'Titular' => 'Mariana',
    'Agência' => '001',
    'Conta' => '2345-6',
    'Saldo' => 1000
];
$conta2 = [
    'Titular' => 'Marcos',
    'Agência' => '002',
    'Conta' => '3456-7',
    'Saldo' => 2000
];
$conta3 = [
    'Titular' => 'Ravi',
    'Agência' => '003',
    'Conta' => '4567-8',
    'Saldo' => 3000
];
$contasCorrentes = [$conta1, $conta2, $conta3];

for($i=0;$i<count($contasCorrentes);$i++){
    echo $contasCorrentes[$i]['Titular'] . PHP_EOL;
}