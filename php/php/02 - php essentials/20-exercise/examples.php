<?php

$isRed = false;

?>

<?php if (!empty($isRed)): ?>
    <h1 style="color: red;">PHP is amazing!</h1>
<?php else: ?>
    <h1>PHP is amazing!</h1>
<?php endif; ?>


<h1 <?php if (!empty($isRed)): ?>style="color: red;"<?php endif; ?>>PHP is amazing!</h1>
