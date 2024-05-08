<?php

header('Content-Type: text/plain');

function add_five(int $number): int {
    return $number + 5;
}

$var = add_five(5);
var_dump($var + 5);