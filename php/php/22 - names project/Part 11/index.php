<?php

function e($value) {
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

function render($view, $params) {
    /*
    foreach ($params AS $key => $value) {
        ${$key} = $value;
    }
    */
    extract($params);

    ob_start();
    require __DIR__ . '/views/pages/' . $view . '.php';
    $contents = ob_get_clean();

    require __DIR__ . '/views/layouts/main.view.php';
}

$name = 'Lauren';
$test = 'ABC';
// $var = 'name';
// var_dump(${$var});

render("index.view", [
    'name' => $name,
    'sum' => 1234567890
]);