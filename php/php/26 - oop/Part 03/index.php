<?php
use Admin\User;
use Client\User as Client;

require __DIR__ . '/src/Admin/Role.php';
require __DIR__ . '/src/Admin/User.php';
require __DIR__ . '/src/Client/User.php';

var_dump(User::class);
var_dump(Client::class);

$admin = new User();
var_dump($admin::class);
var_dump(get_class($admin));
var_dump($admin);

$client = new Client();
var_dump($client);

var_dump($client instanceof Client);
var_dump($client instanceof \Client\User);
var_dump($client instanceof User);