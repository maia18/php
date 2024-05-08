<?php
function e($value) {
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

$id = (!empty($_GET['id']) ? (int) $_GET['id'] : 1);

if ($id >= 5) {
    require __DIR__ . '/notfound.php';
    die();
}

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./simple.css" />
    <title>Document</title>
</head>
<body>
    <header><h1>News website</h1></header>
    <main>
        You were accessing the article with the ID: <?php echo e($id); ?>.
    </main>
</body>
</html>