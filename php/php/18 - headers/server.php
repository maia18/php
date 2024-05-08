<?php

function e($value) {
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}


echo '<pre>';
$ip = $_SERVER['REMOTE_ADDR'];
var_dump($ip);

var_dump($_SERVER);

echo '</pre>';

?>

<form method="POST" action="<?php echo e($_SERVER['PHP_SELF']); ?>">
    <input type="text" name="username" />
    <input type="submit" value="Submit!" /> 
</form>