<?php

header("Content-Type: text/plain");

$year = 2023;
$month = 11;
$day = 15;
$hours = 13;
$minutes = 0;

var_dump(mktime($hours, $minutes, 0, $month, $day, $year));
$timestamp = mktime($hours, $minutes, 0, $month, $day, $year);

date_default_timezone_set('Europe/Berlin');
var_dump(date('Y-m-d', $timestamp));

$str = '2023-11-15 13:00:00';
var_dump(strtotime($str));