<?php

header('Content-Type: text/plain');

function f($str) {
    // $str = '...';
    echo "{$str}\n";
    echo "{$str}\n";
    echo "{$str}\n";
}

f('Hello from PHP!');

echo "------\n";

$message = 'Hello from Mars!';
f($message);

echo "------\n";

f('Hello from PHP ' . 'again');