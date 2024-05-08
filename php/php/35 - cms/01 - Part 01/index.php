<?php

header('Content-Type: text/plain');

// $password = md5('helloworld');
$password = sha1('helloworld');
echo $password;