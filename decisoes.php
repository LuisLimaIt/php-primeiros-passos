<?php

$idade = 18;
$temAcompanhante  = true;

echo "Você só pode entrar se tiver a partir de 18 anos e estiver acompanhado(a) \n" . PHP_EOL;

if ($idade >= 18 && $temAcompanhante) {
    echo "Você tem $idade anos e está acompanhado(a)." . PHP_EOL;;
    echo "Pode entrar!";
} else if ($idade >= 18 && !$temAcompanhante) {
    echo "Você tem $idade anos, mas não está acompanhado(a)." . PHP_EOL;
    echo "Volte para casa!";
} else if ($idade < 18 && $temAcompanhante) {
    echo "Você está acompanhado(a), mas tem apenas $idade anos." . PHP_EOL;
    echo "Volte para casa!";
} else {
    echo "Você não está acompanhado(a) e tem apenas $idade anos." . PHP_EOL;
    echo "Volte para casa!";
}
