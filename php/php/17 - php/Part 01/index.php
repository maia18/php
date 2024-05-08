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

        /*
        $title = '';
        if (!empty($_GET['title'])) {
            $title = $_GET['title'];
        }
        */
        /*
        if (!empty($_GET['title'])) {
            $title = $_GET['title'];
        }
        else {
            $title = '';
        }
        */

        $title = (!empty($_GET['title']) ? $_GET['title'] : '');

        var_dump($title);

        $data = [
            'name' => 'Max',
            'title' => (!empty($_GET['title']) ? $_GET['title'] : '')
        ];

        $hours = (!empty($_GET['hours']) ? (int) $_GET['hours'] : 0);
        var_dump($hours);
    ?></pre>
    </main>
</body>
</html>