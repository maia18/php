<?php

header('Content-Type: text/plain');

function add_five(int $number) {
    var_dump($number);
    return $number + 5;
}

add_five(['id' => '123']);

$id = $_GET['id'] ?? 0;
var_dump($id);
var_dump(add_five($id));