<?php
header('Content-Type: text/plain');

$value = require 'other-file.php';
var_dump($value);