<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./styles/simple.css" />
    <title>Document</title>
</head>
<body>
    <header><h1>PHP: Additional features</h1></header>
    <main><pre><?php 

        $title = (!empty($_GET['title']) ? @(string) $_GET['title'] : '');
        var_dump($title);

        @include 'doesntexists.php';
        @require 'doesntexists.php';
        
    ?></pre>
    </main>
</body>
</html>