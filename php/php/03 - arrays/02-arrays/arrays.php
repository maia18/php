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

/*
$category1 = 'Programming';
$category2 = 'Business';
$category3 = 'Art & Drawing';
$category4 = 'Self improvment';
$category5 = 'History';
*/

// $categories = array('Programming', 'Business', 'Art & Drawing', 'Self improvment', 'History');
$categories = ['Programming', 'Business', 'Art & Drawing', 'Self improvment', 'History'];

// echo $categories;
var_dump($categories);
echo $categories[0] . "\n";
echo $categories[3];

// $firstCategory = $categories[0];
// var_dump($firstCategory);

?></pre>
</body>
</html>