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

        $images = [];
        $allowedExtensions = [
            'jpg',
            'jpeg',
            'png'
        ];
        while (($currentFile = readdir($handle)) !== false) {
            if ($currentFile === '.' || $currentFile === '..') {
                continue;
            }
            $extension = pathinfo($currentFile, PATHINFO_EXTENSION);
            if (!in_array($extension, $allowedExtensions)) {
                continue;
            }
            $fileWithoutExt = pathinfo($currentFile, PATHINFO_FILENAME);
            $txtFile = __DIR__ . '/images/' . $fileWithoutExt . '.txt';
            if (file_exists($txtFile)) {
                $txt = file_get_contents($txtFile);
                var_dump($txt);
            }

            $images[] = [
                'image' => $currentFile,
                'title' => '',
                'content' => ''
            ];
        }
        var_dump($images);

        closedir($handle);
    ?></pre>

        <?php foreach($images AS $image): ?>
            <img src="images/<?php echo rawurlencode($image['image']); ?>" alt="" />
        <?php endforeach; ?>

    </main>
</body>
</html>