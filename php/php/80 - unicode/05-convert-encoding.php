<?php
header('Content-Type: text/plain; charset=utf-8');

$file = file_get_contents(__DIR__ . '/05-convert-encoding.txt');
echo mb_convert_encoding($file, 'utf-8', 'iso-8859-1');