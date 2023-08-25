<?php

$idadeLista = [21, 23, 15,24, 30, 41, 18];

//Tamanho de uma lista:
// echo count($idadeLista);
// echo array_count_values($idadeLista);

for($i = 0; $i < count($idadeLista); $i++) {
    echo $idadeLista[$i] . PHP_EOL;
}