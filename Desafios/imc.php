<?php

$altura = 1.73;
$peso = 3;

$imc = $peso / $altura ** 2 ;

echo "Seu Imc é de $imc" . PHP_EOL;

if ($imc < 18.5) {
    echo "Seu IMC está abaixo do esperado! :(";
} 
else if($imc < 25) {
    echo "Você está com o IMC ideal! ;)";
} 
else {
    echo "Seu IMC está acima do esperado!";
} 

