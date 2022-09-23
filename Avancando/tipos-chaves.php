<?php

// As chaves no PHP só podem ser do tipo inteiro ou string

$array = [
    1 => 'a',
    '2' => 'b'
];

foreach ($array as $item) {
    echo $item . PHP_EOL;
}