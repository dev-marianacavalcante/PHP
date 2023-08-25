<?php

$idadeLista = [21, 23, 15,24, 30, 41, 18];

//para acessar
$primeiraIdade = $idadeLista[0];
echo $primeiraIdade;
//ou 
echo $idadeLista[0];
echo $idadeLista[1];
echo $idadeLista[2];
echo $idadeLista[3];
echo $idadeLista[4];
echo $idadeLista[5];

// adicionando 

$idadeLista [] = 20;

foreach ($idadeLista as $idade) {
    echo $idade . PHP_EOL;
}