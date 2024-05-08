<?php

header('Content-Type: text/plain');

function add_five(float|int $number) {
    return $number + 5;
}

var_dump(add_five(3.141));
var_dump(add_five(5));

function f(array|bool|string $a) {
    var_dump($a);
}

f([]);
f(true);
f(123);