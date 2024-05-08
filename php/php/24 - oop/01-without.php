<?php

header('Content-Type: text/plain');

// require __DIR__ . '/01-without-cloud.php';

$account1 = [
    'nr' => '2349785623478',
    'holder' => 'Olivia Mason',
    'balance' => 1250.00
];

$account2 = [
    'nr' => '40857809345',
    'holder' => 'Avery Morgan',
    'balance' => 250.00
];

function bank_account_print_balance(array $account) {
    echo "The balance of account #{$account['nr']} is {$account['balance']}.\n";
}

function bank_account_transfer(array &$from, array &$to, float|int $amount): bool {
    if ($from['balance'] >= $amount) {
        $from['balance'] = $from['balance'] - $amount;
        $to['balance'] = $to['balance'] + $amount;
        return true;
    }
    else {
        return false;
    }
}

bank_account_print_balance($account1);
bank_account_print_balance($account2);
bank_account_transfer($account2, $account1, 300);
bank_account_print_balance($account1);
bank_account_print_balance($account2);