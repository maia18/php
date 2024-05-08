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
$books = [
    'Harry Potter',
    'Lord of the Rings',
    'The Little Prince',
    'Don Quixote',
    'Alice in Wonderland',
];

$authors = [
    'J.K. Rowling',
    'J.R.R. Tolkien',
    'Antoine de Saint-Exupéry',
    'Miguel de Cervantes',
    'Lewis Carroll'
];

var_dump("{$books[0]} has been written by {$authors[0]}.");
*/

$books = [
    'Harry Potter' => 'J.K. Rowling',
    'Lord of the Rings' => 'J.R.R. Tolkien',
    'The Little Prince' => 'Antoine de Saint-Exupéry',
    'Don Quixote' => 'Miguel de Cervantes',
    'Alice in Wonderland' => 'Lewis Carroll',
];

var_dump($books);
var_dump(isset($books['Harry Potter']));
var_dump(!empty($books['Harry Potter']));
var_dump($books['Harry Potter']);

$key = 'Harry Potter';
var_dump($books[$key]);
var_dump($books['Harry' . ' ' . 'Potter']);

?></pre>


</body>
</html>