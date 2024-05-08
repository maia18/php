<?php

header('Content-Type: text/plain');

class BankAccount {
    public float $balance;

    function __construct(
        public string $nr, 
        public string $holder, 
        float $balance) {

        $this->balance = max(0, $balance);
      
    }

    function printBalance() {
        echo "The balance of account #{$this->nr} is {$this->balance}.\n";
    }
}

$account1 = new BankAccount('2349785623478', 'Olivia Mason', 1250.00);
$account1->printBalance();




