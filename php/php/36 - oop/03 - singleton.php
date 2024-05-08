<?php

header('Content-Type: text/plain');
/*
class Container {
    private function __construct() {}

    public static function newInstance() {
        return new self();
    }
}

$container = Container::newInstance();
var_dump($container);
*/


class Container {
    private function __construct() {}

    private static ?Container $instance = null;

    public static function getInstance() {
        if (empty(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}

$container = Container::getInstance();
$container2 = Container::getInstance();
var_dump($container);
var_dump($container2);