<?php

header('Content-Type: text/plain');

$message = 'Happy 30th Birthday 20 ab!';

$findings = null;
var_dump(preg_match('/\d\d/', $message, $findings));
var_dump($findings);

var_dump(preg_match('/\D/', $message, $findings));
var_dump($findings);

var_dump(preg_match('/\w/', $message, $findings));
var_dump($findings);
/*
var_dump(preg_match_all('/\d\d/', $message, $findings));
var_dump($findings);
*/

var_dump(preg_match('/\d\d\w\w/', $message, $findings));
var_dump($findings);

var_dump(preg_match('/\d\dth/', $message, $findings));
var_dump($findings);