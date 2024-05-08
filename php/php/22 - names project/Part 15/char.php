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

$page = (int) ($_GET['page'] ?? 1);

$perPage = 15;

$names = fetch_names_by_initial($char, $page, $perPage);
$count = count_names_by_initial($char);
// var_dump($names);

render('char.view', [
    'names' => $names,
    'char' => $char,
    'pagination' => [
        'page' => $page,
        'count' => $count,
        'perPage' => $perPage
    ]
]);