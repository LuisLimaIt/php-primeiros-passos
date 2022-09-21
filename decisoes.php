<?php

$idade = 17;
$nome  = "Paulo";

echo "Você só pode entrar se tiver a partir de 18 anos" . PHP_EOL;

if ($idade >= 18 && $nome === "Paulo") {
    echo "Olá $nome, você é um xófem de $idade anos." . PHP_EOL;;
    echo "Pode entrar!";
} else {
    echo "Você é menor de idade ou seu nome não está na lista." . PHP_EOL;
    echo "Volte para casa!";
}
