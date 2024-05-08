<?php

// header('Content-Type: text/plain');

$germanUmlaut = 'öäüß';
$singapore = '新加坡共和国';
$sofiaInBulgaria = 'София';
$bangkok = 'กรุงเทพมหานคร';
$emoji = '🧑🏾';

var_dump(mb_strlen($singapore));
var_dump(mb_substr($singapore, 0, 1));
var_dump(strtoupper($germanUmlaut));
var_dump(mb_strtoupper($germanUmlaut));
var_dump(mb_strtolower($germanUmlaut));
var_dump(strpos($bangkok, 'พ'));
var_dump(mb_strpos($bangkok, 'พ'));
var_dump(mb_str_split($emoji));
var_dump(mb_str_split($singapore));

var_dump(mb_ord('新'));
var_dump(mb_chr(26032));

echo '&#26032;';