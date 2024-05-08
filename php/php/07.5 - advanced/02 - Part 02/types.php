<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./simple.css" />
    <title>Document</title>
</head>
<body><pre><?php

if (isset($_GET['price'])) {
    $price = $_GET['price'];
    var_dump($price);
}
    
?></pre></body>
</html>