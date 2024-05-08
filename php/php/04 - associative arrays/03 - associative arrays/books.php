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

$books = [
    'Harry Potter' => 'J.K. Rowling',
    'Lord of the Rings' => 'J.R.R. Tolkien',
    'The Little Prince' => 'Antoine de Saint-Exupéry',
    'Don Quixote' => 'Miguel de Cervantes',
    'Alice in Wonderland' => 'Lewis Carroll',
];
$books['Romeo and Julia'] = 'William_Shakespeare';
$books['Romeo and Julia'] = 'William Shakespeare';
// unset($books['Harry Potter']);
var_dump(count($books));
var_dump($books);

var_dump(array_keys($books));
var_dump(array_values($books));
/*
foreach (array_keys($books) AS $key) {
    var_dump($key);
}
*/

foreach ($books AS $book => $author) {
    var_dump($book);
    var_dump($author);
}
/* 
foreach ($books AS $key => $value) {
    var_dump($key);
    var_dump($value);
} 
*/


?></pre>


</body>
</html>