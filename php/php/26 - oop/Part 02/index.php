<?php
use Admin\User;
use Client\User as Client;

require __DIR__ . '/src/Admin/Role.php';
require __DIR__ . '/src/Admin/User.php';
require __DIR__ . '/src/Client/User.php';

$admin = new User();
var_dump($admin);

$client = new Client();
var_dump($client);
