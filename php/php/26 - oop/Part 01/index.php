<?php
/*
class Client_User {}
class Admin_User {}
*/

require __DIR__ . '/src/Admin/User.php';
require __DIR__ . '/src/Client/User.php';

$admin = new Admin\User();
$client = new Client\User();
var_dump($admin);
var_dump($client);