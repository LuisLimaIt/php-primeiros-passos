<?php

$contasCorrentes = [
    44422255588 =>  ['titular' => 'Luis', 'saldo' => 6180],  
    99944477733 => ['titular' => 'Carlos', 'saldo' => 6730], 
    99933355566 => ['titular' => 'Alan', 'saldo' => 14575]
];

$contasCorrentes[44121212121] =  ['titular' => 'Fê', 'saldo' => 12180];

foreach ($contasCorrentes as $cpf => $conta) {
    echo $conta['titular'];
    echo " = CPF: $cpf Saldo: ";
    echo $conta['saldo'] . PHP_EOL;
}