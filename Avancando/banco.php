<?php

$contasCorrentes = [
    '444.222.555-88' =>  ['titular' => 'Luis', 'saldo' => 6180],  
    '999.444.777-33' => ['titular' => 'Carlos', 'saldo' => 6730], 
    '999.333.555-66' => ['titular' => 'Alan', 'saldo' => 14575]
];

$valorSaque = 6200;

if($valorSaque > $contasCorrentes['444.222.555-88']['saldo']) {
    echo $contasCorrentes['444.222.555-88']['titular'] . " Não pode realizar o saque - Saldo insuficiente! \n" .PHP_EOL;
} else {
    $contasCorrentes['444.222.555-88']['saldo'] -=  $valorSaque;
}

if($valorSaque > $contasCorrentes['999.444.777-33']['saldo']) {
    echo $contasCorrentes['999.444.777-33']['titular'] . " Não pode realizar o saque - Saldo insuficiente! \n" .PHP_EOL;
} else {
    $contasCorrentes['999.444.777-33']['saldo'] -= $valorSaque;
}

foreach ($contasCorrentes as $cpf => $conta) {
    echo $conta['titular'] . " = CPF: $cpf Saldo: " . $conta['saldo'] . PHP_EOL;
}