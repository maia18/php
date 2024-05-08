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
include 'vars.php';

if ($serverStatus === 'ok') {
    echo '🟢 Welcome to our website! Browse and enjoy our content';
}
else if ($serverStatus === 'error') {
    echo '❌ We got a serious error right now. Please just call us at: +1 (234) 5678';
}
else {
    echo '🔴 We\'re currently undergoing maintenance. Please check back later';
}

    ?></pre>
</body>
</html>