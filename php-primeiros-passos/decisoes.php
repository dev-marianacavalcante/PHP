<?php

$idade = 10;
$nome = 'Mari';

echo "Voce so pode entrar se tiver mais de 18 anos." . PHP_EOL;

// if ($idade > 18) {
//     echo "Voce tem $idade anos. \n";
//     echo "Pode entrar";
// };

//Duas verificacoes como || ou or
// if ($idade == 18 or $idade > 18) {
//     echo "Voce tem $idade anos. \n";
//     echo "Pode entrar";
// };

// if ($idade >= 18) {
//     echo "Voce tem $idade anos. \n";
//     echo "Pode entrar";
// };

 
// && ou and
// if ($idade >= 18 and $nome == 'Mari') {
//     echo "Voce tem $idade anos. \n";
//     echo "Pode entrar";
// };


//senao

if ($idade >= 18) {
    echo "Voce tem $idade anos. \n";
    echo "Pode entrar";
} else {
    echo "Voce so tem $idade anos. \n";
    echo "Nao pode entrar";
}

echo PHP_EOL;
echo "Adeus!";