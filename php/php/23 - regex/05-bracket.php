<?php

header('Content-Type: text/plain');

$message = 'Happy 30th Birthday!';
var_dump(preg_match('/[0-9]{2} ?[a-z]*/', $message, $matches));
var_dump($matches);

var_dump(preg_match('/[bB][a-zA-Z]{5,7}/', $message, $matches));
var_dump($matches);

var_dump(preg_match('/[^a-zA-Z0-9 ]/', $message, $matches));
var_dump($matches);