<?php

function exibeMensagem($mensagem) {
    echo $mensagem . PHP_EOL;
}

$contasCorrentes = [
    '444.222.555-88' =>  ['titular' => 'Luis', 'saldo' => 6180],  
    '999.444.777-33' => ['titular' => 'Carlos', 'saldo' => 6730], 
    '999.333.555-66' => ['titular' => 'Alan', 'saldo' => 14575]
];

$valorSaque = 8200;

if($valorSaque > $contasCorrentes['444.222.555-88']['saldo']) {
    exibeMensagem("[" . $contasCorrentes['444.222.555-88']['titular'] . "] = SALDO INSUFICIENTE");
} else {
    $contasCorrentes['444.222.555-88']['saldo'] -=  $valorSaque;
}

if($valorSaque > $contasCorrentes['999.444.777-33']['saldo']) {
    exibeMensagem("[" . $contasCorrentes['999.444.777-33']['titular'] . "] = SALDO INSUFICIENTE");
} else {
    $contasCorrentes['999.444.777-33']['saldo'] -= $valorSaque;
}

foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem($conta['titular'] . " = CPF: $cpf Saldo: " . $conta['saldo']);
}