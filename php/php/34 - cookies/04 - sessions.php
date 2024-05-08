<?php
// header('Content-Type: text/plain');

session_start();

// session_regenerate_id();

// $_SESSION['counter'] = 5;
$_SESSION['counter']+=1;

var_dump($_SESSION);

// phpinfo();