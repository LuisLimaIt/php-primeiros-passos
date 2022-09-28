<?php

$idades = [21, 23, 19, 21, 30, 25];

$idades[] = 789;


foreach($idades as $idade) {
    echo $idade . PHP_EOL;
}