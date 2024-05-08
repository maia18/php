<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./styles/simple.css" />
    <title>Document</title>
</head>
<body>
    <header><h1>Automatic Image List</h1></header>
    <main><pre><?php 
        $handle = opendir(__DIR__ . '/images');
        /*
        $currentFile = readdir($handle);
        while ($currentFile !== false) {
            var_dump($currentFile);
            $currentFile = readdir($handle);
        }
        */
        $images = [];
        while (($currentFile = readdir($handle)) !== false) {
            if ($currentFile === '.' || $currentFile === '..') {
                continue;
            }
            var_dump($currentFile);
            $images[] = $currentFile;
        }

        // var_dump($str2 = $str = 'hello');

        closedir($handle);
    ?></pre>

        <?php foreach($images AS $image): ?>
            <img src="images/<?php echo rawurlencode($image); ?>" alt="" />
        <?php endforeach; ?>

    </main>
</body>
</html>