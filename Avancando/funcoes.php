<?php

function sacar(array $contaCorrente, float $valorDoSaque): array 
{
    if($valorDoSaque > $contaCorrente['saldo']) {
        exibeMensagem("[{$contaCorrente['titular']}] = SALDO INSUFICIENTE");
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
    echo $mensagem . '<br>';
};

function titularComLetrasMaiusculas(array &$contaCorrente) {
    $contaCorrente['titular'] = mb_strtoupper($contaCorrente['titular']);
}

function exibeConta(array $conta) 
{
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    echo "<li>$titular . Saldo: $saldo </li>" ;
}