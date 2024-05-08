<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./simple.css" />
    <title>Document</title>
    <style> h1 { width: 20rem; height: 10rem; background: red; }</style>
</head>
<body>
    <pre><?php

        $pageTitle = 'PHP is amazing!';
        // $pageTitle = '0';
        // $pageTitle = '';
        // unset($pageTitle);

        var_dump(isset($pageTitle));
        var_dump(empty($pageTitle));

    ?></pre>

    <?php
        if (isset($pageTitle) && $pageTitle !== '') {
            echo "<h1>{$pageTitle}</h1>";
        }
        if (!empty($pageTitle)) {
            echo "<h1>{$pageTitle}</h1>";
        }
    ?>
</body>
</html>