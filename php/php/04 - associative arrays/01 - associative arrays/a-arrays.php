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

$categories = [
    'Programming',
    'Business', 
    'Art & Drawing', 
    'Self improvement', 
    'History',
];

// @ supresses potential warnings for the rest of the line
// This means, we can access $_GET['category'] even if it 
// does not exist - we will then just get NULL, and no
// warning will be shown.
//
// We will look at @ later in this course!
@var_dump($_GET['category']);
@var_dump($_POST['username']);

?></pre>

<form method="POST">
    <input type="text" name="username">
    <input type="submit" />
</form>

</body>
</html>