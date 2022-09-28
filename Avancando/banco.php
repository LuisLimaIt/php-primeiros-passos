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

// echo "<ul>";

// foreach ($contasCorrentes as $cpf => $conta) {
//     ['titular' => $titular, 'saldo' => $saldo] = $conta;
//     exibeConta($conta);
// };

// echo "</ul>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contas correntes<h1>

    <dl>
        <?php foreach($contasCorrentes as $cpf => $conta) { ?>
        <dt>
            <h6>Conta: <?= $conta['titular'] ?>; - <?= $cpf; ?></h6>
        </dt>
        <dd>
            <h6>Saldo: <?= $conta['saldo'] ?>;</h6>
        </dd>
        <?php } ?>
    </dl>
</body>
</html>