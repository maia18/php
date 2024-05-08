<?php

for ($x = 0; $x < 4095; $x++) {
    echo ' ';
}

include __DIR__ . '/other.php';

header("Content-Type: text/plain");

var_dump(ini_get('output_buffering'));

echo file_get_contents('pg1513.txt');