<?php

if (!empty($_GET['cookieok'])) {
    setcookie('cookieok', '1');
    header("Location: 05 - cookie-message.php");
    die();
}

if (!empty($_COOKIE['cookieok'])) {
    $counter = @(int) ($_COOKIE['counter'] ?? 0);
    setcookie('counter', $counter + 1);
    var_dump($counter);
}
else {
    echo "<p>Do you allow cookies: <a href='05 - cookie-message.php?cookieok=yes'>Yes</a></p>";
}