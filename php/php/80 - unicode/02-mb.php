<?php

header('Content-Type: text/plain');

$germanUmlaut = 'öäüß';
$singapore = '新加坡共和国';
$sofiaInBulgaria = 'София';
$bangkok = 'กรุงเทพมหานคร';
$emoji = '🧑🏾';

var_dump(mb_strlen('hello world'));
var_dump(mb_strlen($germanUmlaut));
var_dump(mb_strlen($bangkok));
var_dump(mb_strlen($emoji));

var_dump($emoji);
var_dump(mb_substr($emoji, 0, 1));
var_dump(mb_substr($emoji, 1, 1));
