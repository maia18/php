<?php

header('Content-Type: text/plain');

function format_filesize($size) {
    // bytes
    if ($size < 1024) {
        return "{$size} bytes";
    }
    // kB
    $size = $size / 1024;
    if ($size < 1024) {
        $size = round($size, 2);
        return "{$size} kB";
    }
    // MB
    $size = $size / 1024;
    if ($size < 1024) {
        $size = round($size, 2);
        return "{$size} MB";
    }
    // GB
    $size = $size / 1024;
    if ($size < 1024) {
        $size = round($size, 2);
        return "{$size} GB";
    }
}
/*
var_dump(format_filesize(50));
var_dump(format_filesize(1500));
var_dump(format_filesize(1500000));
*/

$size = filesize(__DIR__ . '/08-cat.jpg');
var_dump(format_filesize($size));

