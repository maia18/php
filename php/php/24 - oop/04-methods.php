<?php

header('Content-Type: text/plain');

class BankAccount {
    public string $nr;
    public string $holder;
    public float $balance;

    function printBalance() {
        echo "The balance of account #{$this->nr} is {$this->balance}.\n";
    }
}

$account1 = new BankAccount();
$account1->nr = '2349785623478';
$account1->holder = 'Olivia Mason';
$account1->balance = 1250.00;
$account1->printBalance();

$account2 = new BankAccount();
$account2->nr = '40857809345';
$account2->holder = 'Avery Morgan';
$account2->balance = 250.00;
$account2->printBalance();

