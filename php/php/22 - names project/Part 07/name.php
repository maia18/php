<?php

require __DIR__ . '/inc/all.inc.php';

$name = (string) ($_GET['name'] ?? '');
if (empty($name)) {
    header("Location: index.php");
    die();
}

$entries = fetch_name_entries($name);
?>
<?php require __DIR__ . '/views/header.php'; ?>

<h1>Statistics for the name: <?php echo e($name); ?></h1>

<?php if (empty($entries)): ?>
    <p>We could not find any entries in our system :/ </p>
<?php else: ?>
    <table>
        <thead>
            <tr>
                <th>Year</th>
                <th>Number of Babies born</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($entries AS $entry): ?>
                <tr>
                    <td><?php echo e($entry['year']); ?></td>
                    <td><?php echo e($entry['count']); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>
<?php /*
<pre><?php var_dump($entries); ?></pre>
*/ ?>
<?php require __DIR__ . '/views/footer.php'; ?>