<?php

header('Content-Type: text/plain');

$message = 'Happy 30th Birthday!';

var_dump(preg_match('/^\d/', $message));

var_dump(preg_match('/^\d+\.\d+$/', '123.45'));

var_dump(preg_match('/^.+@.+\..+$/', 'user@example.com'));