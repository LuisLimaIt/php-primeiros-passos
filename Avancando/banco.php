<?php

function sacar(array $contaCorrente, float $valorDoSaque): array 
{
    if($valorDoSaque > $contaCorrente['saldo']) {
        exibeMensagem("[" . $contaCorrente['titular'] . "] = SALDO INSUFICIENTE");
    } else {
        $contaCorrente['saldo'] -=  $valorDoSaque;
    }
    return $contaCorrente;
};

function depositar(array $contaCorrente, float $valorDoDeposito): array 
{
    if ($valorDoDeposito > 0) {
        $contaCorrente['saldo'] +=  $valorDoDeposito;
    } else {
        echo "O valor do depósito não pode ser negativo!" . PHP_EOL;
    }
    return $contaCorrente;
};

function exibeMensagem(string $mensagem) 
{
    echo $mensagem . PHP_EOL;
};

$contasCorrentes = [
    '444.222.555-88' =>  ['titular' => 'Luis', 'saldo' => 6180],  
    '999.444.777-33' => ['titular' => 'Carlos', 'saldo' => 6730], 
    '999.333.555-66' => ['titular' => 'Alan', 'saldo' => 14575]
];

$contasCorrentes['444.222.555-88'] = sacar($contasCorrentes['444.222.555-88'], 6180);
$contasCorrentes['999.444.777-33'] = sacar($contasCorrentes['999.444.777-33'], 9180);

$contasCorrentes['999.333.555-66'] = depositar($contasCorrentes['999.333.555-66'], 1000);


foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem($conta['titular'] . " = CPF: $cpf Saldo: " . $conta['saldo']);
};