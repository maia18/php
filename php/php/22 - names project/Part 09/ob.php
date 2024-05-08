<?php
header('Content-Type: text/plain');

ob_start();
echo 'Hello World';
$contents = ob_get_clean();

var_dump($contents);


echo "---";

ob_start();
?>
    <h1>Hello World!!!</h1>
<?php
$contents = ob_get_clean();

var_dump($contents);

echo "---";

ob_start();
require __DIR__ . '/view.php';
$contents = ob_get_clean();

var_dump($contents);