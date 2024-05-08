<?php

$ua = $_SERVER['HTTP_USER_AGENT'] ?? '';

if (strpos($ua, 'Firefox') !== false) {
    echo 'You are using Firefox!';
}
else {
    echo 'You are using Chrome!';
}

var_dump($ua);

echo '<pre>';
var_dump($_SERVER);
echo '</pre>';