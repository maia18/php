<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./simple.css" />
    <title>Document</title>
</head>
<body>
<pre><?php

$names = [
    'Emily Johnson',
    'Michael Smith',
    'Sarah Williams',
    'James Brown',
    'Jennifer Davis',
    'William Miller',
];

// var_dump($names[rand(0, count($names) - 1)]);

$num = count($names);
$choice = rand(0, $num - 1);
echo "The winner is: {$names[$choice]}";

?></pre>
</body>
</html>