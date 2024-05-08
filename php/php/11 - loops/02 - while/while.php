<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="./simple.css" />
</head>
<body><pre><?php
    
    $sum = 0;
    $number = 0;
    while ($sum < 100) {
        // $sum+=$number;
        $sum = $sum + $number;

        // $number++;
        $number = $number + 1;
    }
    var_dump($number);
    var_dump($sum);

?></pre>
</body>
</html>