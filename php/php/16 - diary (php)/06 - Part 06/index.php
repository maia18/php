<?php

header("Content-Type: text/plain");

$start = microtime(true);

// Date functions!
// UNIX timestamp
var_dump(time());
var_dump(microtime(true));

$end = microtime(true);
var_dump($end - $start);


// 
date_default_timezone_set('America/New_York');
var_dump(date('Y-m-d H:i:s', 1700000000));
var_dump(date('M/d/Y h:i a', 1700000000));