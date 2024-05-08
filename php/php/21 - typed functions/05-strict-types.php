<?php
declare(strict_types=1);

header('Content-Type: text/plain');

function add_five(int $number): int {
    return $number + 5;
}

$id = (int) ($_GET['id'] ?? 0);

var_dump(add_five($id));

function print_5x(string $message): void {
    echo "{$message}\n";
    echo "{$message}\n";
    echo "{$message}\n";
    echo "{$message}\n";
    echo "{$message}\n";
}

print_5x((string) $id);
print_5x("{$id}");

print_5x((string) 123);