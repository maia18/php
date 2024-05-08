<?php

header('Content-Type: text/plain');

function print_5x($str = 'Hello World', $times = 5) {
    for ($x = 0; $x < $times; $x++) {
        var_dump($str);
    }
}

// print_5x('Hello Mars', 3);
// print_5x('Hello World', 3);
// print_5x(times: 3);

$number = 3;
// print_5x(times: $number);

print_5x(times: 3, str: 'Hello World!');