<?php

require __DIR__ . '/inc/all.inc.php';

$char = (string) ($_GET['char'] ?? '');
if (strlen($char) > 1) {
    $char = $char[0];
}
if (strlen($char) === 0) {
    header("Location: index.php");
    die();
}
$char = strtoupper($char);

$names = fetch_names_by_initial($char);
// var_dump($names);

?>
<?php require __DIR__ . '/views/header.php'; ?>

<ul>
    <?php foreach($names AS $name): ?>
        <li>
            <a href="name.php?<?php echo http_build_query(['name' => $name]); ?>">
                <?php echo e($name); ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>

<?php require __DIR__ . '/views/footer.php'; ?>