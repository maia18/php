<?php

require __DIR__ . '/inc/all.inc.php';

$char = (string) ($_GET['char'] ?? '');
if (strlen($char) > 1) {
    $char = $char[0];
}
if (strlen($char) === 0) {
    header("Location: index.php");
    die();
}
$char = strtoupper($char);

$names = fetch_names_by_initial($char);
// var_dump($names);

render('char.view', [
    'names' => $names,
    'char' => $char
]);