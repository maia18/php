<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./simple.css" />
    <title>Document</title>
</head>
<body><pre><?php

$name = @(string) ($_GET['name'] ?? '');
var_dump($name);
    
?></pre>
<a href="null-coalescing.php?<?php echo http_build_query(['name' => ['Jannis', 'Olivia']]); ?>">Link</a>
</body>
</html>