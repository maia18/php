<?php

header('Content-Type: text/plain');

$message = 'Happy 30th Birthday! Best wishes php@example.com';

for ($x = 1; $x <= 120; $x++) {
    var_dump(strpos($message, $x));
}
