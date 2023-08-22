<?php

$idade = '17';
$numeroDePessoas = 1;

echo "Voce so pode entrar se tiver mais de 18 anos ou " ;
echo "a partir de 16 anos acompanhado." . PHP_EOL;

if ($idade >= 18) {
    echo "Voce tem $idade anos. Pode entrar sozinho.";
} else if ($idade >= 16 && $numeroDePessoas > 1) {
    echo "Voce tem $idade anos. Esta acompanhado(a), entao pode entrar.";
} else {
    echo "Voce so tem $idade anos. Nao pode entrar sozinho.";
}

echo PHP_EOL;
echo "Adeus!";