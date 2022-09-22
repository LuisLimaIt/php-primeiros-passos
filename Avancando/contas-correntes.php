<?php

$contas = [
    ['titular' => 'Luis', 
    'saldo' => 3180],
    ['titular' => 'Carlos', 
    'saldo' => 6730],
    ['titular' => 'Alan', 
    'saldo' => 4575],
];

echo $conta1[2]['titular'];

for($i =0; $i < count($contas); $i++) {
    echo $contas[$i]['titular']; 
    echo " = "; 
    echo $contas[$i]['saldo']. PHP_EOL;
}