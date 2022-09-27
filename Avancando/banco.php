<?php

require_once 'funcoes.php';

$contasCorrentes = [
    '444.222.555-88' =>  ['titular' => 'Luis', 'saldo' => 6180],  
    '999.444.777-33' => ['titular' => 'Carlos', 'saldo' => 6730], 
    '999.333.555-66' => ['titular' => 'Alan', 'saldo' => 14575]
];

$contasCorrentes['444.222.555-88'] = sacar($contasCorrentes['444.222.555-88'], 6180);
$contasCorrentes['999.444.777-33'] = sacar($contasCorrentes['999.444.777-33'], 9180);

$contasCorrentes['999.333.555-66'] = depositar($contasCorrentes['999.333.555-66'], 1000);

unset($contasCorrentes['444.222.555-88']);

titularComLetrasMaiusculas($contasCorrentes['999.333.555-66']);

foreach ($contasCorrentes as $cpf => $conta) {
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    exibeMensagem("$titular  = CPF: $cpf Saldo: $saldo}");
};
