<?php

header('Content-Type: text/plain');

class BankAccount {

    function __construct(
        private string $nr, 
        private string $holder, 
        private float $balance) {
    }

    function getBalance(): float {
        return $this->balance;
    }
    /*
    function setBalance(float $balance) {
        $this->balance = $balance;
    }
    */

    function printBalance() {
        echo "The balance of account #{$this->nr} is {$this->balance}.\n";
    }
    function transfer(BankAccount $to, $amount = 0) {
        if ($this->balance >= $amount) {
            $this->balance-=$amount;
            $to->balance+=$amount;
            return true;
        }
        else {
            return false;
        }
    }
}

$account1 = new BankAccount('2349785623478', 'Olivia Mason', 1250.00);
$account1->printBalance();

$account2 = new BankAccount('40857809345', 'Avery Morgan', 250.00);
$account2->printBalance();

$account2->transfer($account1, 200);
$account1->printBalance();
$account2->printBalance();

