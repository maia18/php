<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./simple.css" />
    <title>Document</title>
</head>
<body><pre><?php

function e($value) {
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}
var_dump($_GET);
// $text = @(string) $_GET['text'];
// $text = (!empty($_GET['text']) ? @(string) $_GET['text'] : '');
$text = '';
if (!empty($_GET['text'])) {
    $text = @(string) $_GET['text'];
}

var_dump($text);
?></pre>
<h1><?php echo e($text); ?></h1>
</body>
</html>