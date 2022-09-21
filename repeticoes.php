<?php

$contador = 0;

while ($contador <= 15) {
    echo "#$contador" . PHP_EOL;
    $contador++;
}

for ($i=0; $i <= 15; $i++) { 
    if($i === 13) {
        continue;
    }
    echo "#$i" . PHP_EOL;
}