<?php
declare(strict_types=1);

header('Content-Type: text/plain');

class BankAccount {
    public string $nr;
    public string $holder;
    public float $balance = 0;

    public $something;
}

$account = new BankAccount();
$account->something = [];
$account->nr = (string) 1234;
var_dump($account);


$account->nr = '54321';
var_dump($account);
var_dump($account->nr);