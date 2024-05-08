<?php

header('Content-Type: text/plain');

function print_5x(string $message) {
    echo "{$message}\n";
    echo "{$message}\n";
    echo "{$message}\n";
    echo "{$message}\n";
    echo "{$message}\n";
}

print_5x('Hello!');

function sum_prices(array $prices) {
    $sum = 0;
    foreach ($prices AS $price) {
        $sum = $sum + $price;
    }
    return $sum;
}

sum_prices([1, 2, 3]);
sum_prices('hello');
// sum_prices([1, 2, 'hello']);