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

$categories = ['Programming', 'Business', 'Art & Drawing', 'Self improvment', 'History'];
$categories[2] = 'Art and Drawing';

$categories[] = 'Nature books';

// unset($categories[3]);

var_dump($categories);
var_dump($categories[5]);


?></pre>
</body>
</html>