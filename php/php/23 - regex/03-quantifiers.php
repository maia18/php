<?php

header('Content-Type: text/plain');

$message = 'Happy 30th Birthday!';

$matches = null;
var_dump(preg_match('/\d+/', $message, $matches));
var_dump($matches);

var_dump(preg_match('/\d+ ?th/', $message, $matches));
var_dump($matches);

var_dump(preg_match('/\w{5}/', $message, $matches));
var_dump($matches);

var_dump(preg_match('/\w{6,}/', $message, $matches));
var_dump($matches);