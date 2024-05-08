<?php

header('Content-Type: text/plain');


$message = 'The hotel costs $ 250.00, and the flight is € 150.00. And this number is just annoying: 123.00';

// var_dump(preg_match('/([$€]) ([0-9]+\.[0-9]{2})/u', $message, $matches));
//var_dump($matches);
// var_dump(preg_replace('/([$€]) ([0-9]+\.[0-9]{2})/u', '---', $message));
// var_dump(preg_replace('/([$€]) ([0-9]+\.[0-9]{2})/u', '<u> $0 </u>', $message));

var_dump(preg_replace('/([$€]) ([0-9]+\.[0-9]{2})/u', '$1 ---', $message));