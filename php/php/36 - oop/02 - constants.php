<?php

header('Content-Type: text/plain');

/*
define('FILE_PATH', __DIR__ . '/files');
var_dump(FILE_PATH);
*/

class Car {
    const FILE_PATH = __DIR__ . '/files';
}

var_dump(Car::FILE_PATH);

var_dump(PDO::FETCH_ASSOC);