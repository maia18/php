<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./simple.css"/>
    <title>Document</title>
</head>
<body><pre><?php

function e($value) {
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

$prices = [
    [150, 250, 500, 1000],
    [500, 450] 
];

var_dump(count($prices));

$count = 0;
foreach ($prices AS $element) {
    // $count = $count + count($element);
    $count+=count($element);
} 
var_dump($count);

$sum = 0;
foreach ($prices AS $element) {
    foreach ($element AS $value) {
        // $sum = $sum + $value;
        $sum+=$value;
    }
}
var_dump($sum);

?></pre>

</body>
</html>