<?php
require __DIR__ . '/inc/functions.inc.php'; 

$city = null;
if (!empty($_GET['city'])) {
    $city = $_GET['city'];
}

$filename = null;
if (!empty($city)) {
    $cities = json_decode(
        file_get_contents(__DIR__ . '/../data/index.json'),
        true
    );
    foreach ($cities AS $currentCity) {
        if ($currentCity['city'] === $city) {
            $filename = $currentCity['filename'];
            break;
        }
    }
}

if (!empty($filename)) {
    $data = json_decode(
        file_get_contents('compress.bzip2://' . __DIR__ . '/../data/' . $filename),
        true
    )['results'];
    var_dump($data);
}

?>

<?php require __DIR__ . '/views/header.inc.php'; ?>
<?php if (empty($city)): ?>
    <p>The city could not be loaded.</p>
<?php else: ?>

<?php endif; ?>

<?php require __DIR__ . '/views/footer.inc.php'; ?>
