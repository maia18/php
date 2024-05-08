<?php

header('Content-Type: text/plain');

$password = password_hash('helloworld', PASSWORD_DEFAULT);
echo $password;

echo "\n---\n";

$time = microtime(true);
echo password_verify('helloworld!', $password);
echo "\n" . (microtime(true) - $time);