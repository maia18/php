<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generating_HTML</title>
    <style>
        .body-1{
            background-color: red;
        }
        .body-2{
            background-color: gray;
        }
        .body-3{
            background-color: purple;
        }
        .body-4{
            background-color: green;
        }
        .body-5{
            background-color: darkblue;
        }
    </style>
</head>
<body class="body-<?php echo rand(1, 6);?>">
    <?php echo'<h1>Hello, World!</h1>'; ?>
</body>
</html>