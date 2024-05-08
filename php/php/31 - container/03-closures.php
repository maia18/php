<?php
header('Content-Type: text/plain');

$what = 'Mars!';

$print_5x = function() use($what) {
    var_dump('Hello ' . $what);
    var_dump('Hello ' . $what);
    var_dump('Hello ' . $what);
    var_dump('Hello ' . $what);
    var_dump('Hello ' . $what);
};


$print_5x();